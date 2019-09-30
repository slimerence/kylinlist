<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Auth\CustomizedAuthenticatesUsers;
use App\Model\Suppliers\Supplier;
use App\Model\UserProfile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
        if($user){
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
        $this->data_view['user'] = $user;
        /*if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }*/
        $this->data_view['sidemenu'] = true;
        return view('frontend.customer.my_dash',$this->data_view);
    }

    public function logout(Request $request){
        $request->session()->forget('user_data');
        return redirect('/');
    }


}
