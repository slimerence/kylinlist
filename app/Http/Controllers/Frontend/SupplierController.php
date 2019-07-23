<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Catalog\Product;
use App\Model\Category;
use App\Model\Supplier;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function category(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('frontend.supplier.category',$this->data_view);
    }

    public function category_list(){

        return view('frontend.supplier.category_list');
    }

    public function category_view($url){
        $category = Category::where('url',$url)->first();
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['category'] = $category;
        if($category){
            $this->data_view['suppliers'] = $category->getSupplier()->paginate(9);
            return view('frontend.supplier.supplier_list',$this->data_view);
        }else{
            return redirect('/category-list');
        }
    }

    public function supplier_view($url,$uri){
        $supplier = Supplier::where('url',$uri)->first();
        if($supplier){
            $this->data_view['supplier']=$supplier;
            $products = $supplier->products;
            $this->data_view['products']=$products;
            return view('frontend.supplier.supplier',$this->data_view);
        }else{
            return back()->with('error','Supplier not found');
        }

    }

    public function supplier(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['suppliers'] = Supplier::orderby('id','asc')->paginate(9);

        return view('frontend.supplier.supplier',$this->data_view);
    }

    public function category_supplier(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['suppliers'] = Supplier::orderby('id','asc')->paginate(9);
        return view('frontend.supplier.supplier_list',$this->data_view);

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
        //dd($request->all());
        $this->validator($user_data)->validate();
        $user_data['group_id'] = 2;
        $user_data['password'] = Hash::make($user_data['password']);
        $user = User::create($user_data);
        if($user){
            $supplier = Supplier::create(['name'=>$request->get('name'),'category_id'=>$request->get('category'),'user_id'=>$user->id]);
        }
        return redirect('supplier/login');
    }

    public function product($url){
        $product = Product::where('url',$url)->first();
        $this->data_view['product'] = $product;
        $this->data_view['supplier'] = $product->supplier;
        return view('frontend.supplier.product',$this->data_view);
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
