<?php

namespace App\Http\Controllers\Backend\Supplier;

use App\Http\Controllers\Auth\CustomizedAuthenticatesUsers;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    use CustomizedAuthenticatesUsers;
    public function login(){
        return view('supplier.login',$this->data_view);
    }

    public function login_check(Request $request){
        $this->validateLogin($request);

        $user = User::where('email',$request->get('email'))
            ->where('group_id',2)
            ->first();

        if($user && Hash::check($request->get('password'), $user->password)){

            $this->_saveUserInSession($user);

            return redirect('/supplier/home');
        }else{
            $errors = [$this->username() => trans('auth.failed')];

            if ($request->expectsJson()) {
                return response()->json($errors, 422);
            }
            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors($errors);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        $this->data_view['user'] = $user;
        if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }
        return view('supplier.dashboard',$this->data_view);
    }

    public function profile(Request $request){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        $this->data_view['user'] = $user;
        if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }
        return view('supplier.profile',$this->data_view);

    }

    public function profile_update(Request $request){
        $user_data = $request->session()->get('user_data');
        $data = $request->all();
        $user = User::find($user_data['id']);
        $supplier_data = $request->get('supplier');
        //dd($supplier_data);
        if($user->supplier){
            foreach ($supplier_data as $key=>$value){
                $user->supplier->$key = $value;
            }
            $image = $data['supplier']['avatar_path'];
            if($image){
                $storagePath = _buildUploadFolderPath();
                $mediaFor = MediaTool::$FOR_AVATAR;
                //dd($image);
                $name = str_replace(" ", "_", $image->getClientOriginalName());
                //get image file.
                $path = $image->storeAs($storagePath,$name,'public');
                // 保存到数据库中
                $avatar = Media::Persistent(
                    $user->supplier->id,
                    MediaTool::GuessFileTypeByExtensionName($image->extension()),
                    _buildFrontendAssertPath($path),
                    $name,
                    $mediaFor
                );
                $user->supplier->avatar_path = $avatar->url;
            };
            $user->supplier->save();
        }
        return redirect('/supplier/profile');
    }
}
