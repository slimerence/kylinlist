<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index(){
        $this->data_view['vmap'] = true;
        $this->data_view['echart'] = true;
        return view('backend.dashboard',$this->data_view);
    }

    public function login(){
        return view('backend.login',$this->data_view);
    }


}
