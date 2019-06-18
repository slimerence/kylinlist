<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index(){

        return view('backend.dashboard');
    }

    public function login(){
        return view('backend.login');
    }
}
