<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourceController extends Controller
{
    public function index(){

        return view('frontend.source.post');
    }

    public function list(){

        return view('frontend.source.list');
    }
}
