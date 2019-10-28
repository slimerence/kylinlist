<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Auth\CustomizedAuthenticatesUsers;
use App\Model\Category;
use App\Model\Suppliers\Supplier;
use App\Model\UserProfile;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use CustomizedAuthenticatesUsers;

    public function register_form(){
        return view('frontend.customer.register',$this->data_view);
    }

    /**
     * post user register form
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request){
        $user_data = $request->get('user');
        //dd($request->all());
        $this->validator($user_data)->validate();
        $user_data['group_id'] = 3;
        $user_data['password'] = Hash::make($user_data['password']);
        $user = User::create($user_data);
        if($user->profile == null){
            $user_profile = UserProfile::create(['user_id'=>$user->id]);
        }
        $this->_saveUserInSession($user,'buyer');
        return redirect('/user/dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * show login form for buyer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('frontend.customer.login',$this->data_view);
    }

    /**
     * Used for supplier login verification
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login_check(Request $request){
        $this->validateLogin($request);

        $user = User::where('email',$request->get('email'))
            ->where('group_id',3)
            ->first();
        if($user==null){
            $errors = [$this->username() => trans('auth.failed')];
            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors($errors);
        }else{
            if($user && Hash::check($request->get('password'), $user->password)){
                $this->_saveUserInSession($user,'buyer');
                //如果检查到Session里有临时的Source Request信息 转回post页面重新提交
                if(Session::get('source')){
                    return redirect('/post-request');
                }
                return redirect('/user/dashboard');
            }else{
                $errors = ['password' => 'Your password is not correct!'];
                if ($request->expectsJson()) {
                    return response()->json($errors, 422);
                }
                return redirect()->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->withErrors($errors);
            }
        }
    }

    /**
     * After Success login, Redirect to supplier homepage
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        if($user == null){
            return redirect('user/login');
        }
        $this->data_view['user'] = $user;
        /*if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }*/
        $this->data_view['sidemenu'] = true;
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['profile'] = $user->profile;

        $this->data_view['dropify']=true;
        $this->data_view['vuejs']=true;
        return view('frontend.customer.my_dash',$this->data_view);
    }

    public function logout(Request $request){
        $request->session()->forget('user_data');
        return back();
    }

    public function save_profile(Request $request){
        $user_data = $request->session()->get('user_data');
        $data = $request->all();
        //dd($data);
        $user = User::find($user_data['id']);
        $profile = $request->get('p');
        if($user->profile) {
            foreach ($profile as $key => $value) {
                $user->profile->$key = $value;
            }
            if (key_exists('avatar', $data)) {
                $image = $data['avatar'];
                if ($image) {
                    $storagePath = _buildUploadFolderPath();
                    $mediaFor = MediaTool::$FOR_USER_FEATURE;
                    //dd($image);
                    $name = str_replace(" ", "_", $image->getClientOriginalName());
                    $media = Media::where('for',$mediaFor)->where('target_id',$user->profile->id)->first();
                    if($media){
                        if (file_exists(public_path() . $media->url)) {
                            unlink(public_path() . $media->url);
                        };
                        $media->delete();
                    }
                    //get image file.
                    $path = $image->storeAs($storagePath, $name, 'public');
                    // 保存到数据库中
                    $avatar = Media::Persistent(
                        $user->profile->id,
                        MediaTool::GuessFileTypeByExtensionName($image->extension()),
                        _buildFrontendAssertPath($path),
                        $name,
                        $mediaFor
                    );
                    $user->profile->avatar_path = $avatar->url;
                };
            }
            $user->profile->save();
            return redirect('user/dashboard');
        }
    }

}
