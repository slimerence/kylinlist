<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return view('frontend.supplier.join_us');
    }

    public function product(){

        return view('frontend.supplier.product');
    }

    public function profile(){

        return view('frontend.profile.index');
    }
}
