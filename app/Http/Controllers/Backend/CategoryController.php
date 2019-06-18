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
        if(isset($data['id'])){
            $category = Category::find($data['id']);
        }
        $info = [];
        $info['name'] = $data['name'];
        $info['name_cn'] = $data['name_cn'];
        $info['url']= $data['url'];
        $info['position'] = $data['position'];
        $info['level'] = $data['level'];
        $info['status'] = 0;
        if($info['level']==1){
            $info['parent_id']= 0;
        }else{
            $info['parent_id']= $data['main'];
        }
        if(isset($data['status'])){
            $info['status'] = 1;
        }
        //dd($info);

        Category::create($info);
        return redirect('admin/category/list');
    }

}
