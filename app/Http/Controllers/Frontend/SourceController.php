<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourceController extends Controller
{
    public function index(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['vuejs'] = true;
        return view('frontend.source.post',$this->data_view);
    }

    public function list(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('frontend.source.list',$this->data_view);
    }
}
