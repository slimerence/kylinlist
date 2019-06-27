<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function category(){

        return view('frontend.supplier.category');
    }

    public function category_list(){

        return view('frontend.supplier.category_list');
    }

    public function category_view($url){
        $category = Category::where('url',$url)->first();
        $this->data_view['category'] = $category;
        return view('frontend.supplier.category_supplier',$this->data_view);
    }

    public function supplier(){

        return view('frontend.supplier.supplier');
    }

    public function category_supplier(){

        return view('frontend.supplier.category_supplier');

    }

    public function login(){

        return view('backend.login');
    }

    public function supplier_join(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('frontend.supplier.join_us',$this->data_view);
    }

    public function register(Request $request){
        $user_data = $request->get('user');
        $this->validator($user_data)->validate();
        $user_data['group_id'] = 2;
        $user_data['password'] = Hash::make($user_data['password']);
        $user = User::create($user_data);

        if($user){
            dd($user);
        }
    }

    public function product(){

        return view('frontend.supplier.product');
    }

    public function profile(){

        return view('frontend.profile.index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }
}
