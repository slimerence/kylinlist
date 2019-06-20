<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        return view('frontend.home',$this->data_view);
    }

    public function about(){

        return view('frontend.about',$this->data_view);

    }

    public function faq(){

        return view('frontend.pages.faq');
    }

    public function contact(){

        return view('frontend.contact',$this->data_view);

    }

    public function coming(){

        return view('frontend.pages.construction');
    }

    public function pricing(){

        return view('frontend.pages.pricing');
    }

    public function blog_list(){

        return view('frontend.blog.blog-list');
    }

    public function blog_detail(){

        return view('frontend.blog.detail');
    }
}
