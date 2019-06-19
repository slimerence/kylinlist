<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    public function list(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('backend.category.list',$this->data_view);
    }

    public function edit($id){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('backend.category.view',$this->data_view);
    }

    public function create(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();

        return view('backend.category.view',$this->data_view);
    }

    public function save(Request $request){
        $data = $request->all();
        Category::Persistent($data);

        return redirect('admin/category/list');
    }

}
