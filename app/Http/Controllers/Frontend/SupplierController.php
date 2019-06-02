<?php

namespace App\Http\Controllers\Frontend;

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

}
