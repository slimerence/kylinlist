<?php

namespace App\Http\Controllers\Backend;

use App\Model\Blog;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //

    public function list(){
        $this->data_view['blog'] = null;
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        return view('backend.blog.list',$this->data_view);
    }


    public function create(){
        $this->data_view['blog'] = new Blog();
        $categories = Category::orderBy('id','asc')->get();
        //dd($categories);
        $this->data_view['categories'] = $categories;
        return view('backend.blog.view',$this->data_view);
    }

    public function save(Request $request){
        $data = $request->all();

    }
}
