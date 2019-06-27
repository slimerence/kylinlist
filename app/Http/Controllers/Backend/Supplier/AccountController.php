<?php

namespace App\Http\Controllers\Backend\Supplier;

use App\Http\Controllers\Auth\CustomizedAuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function index(){

    }
}
