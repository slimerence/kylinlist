<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\SourceRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SourceController extends Controller
{
    public function index(){
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['vuejs'] = true;
        return view('frontend.source.post',$this->data_view);
    }

    public function list(){
        $this->data_view['data_table'] =true;
        $this->data_view['roots'] = Category::where('level',1)->orderby('position','asc')->get();
        $this->data_view['sources'] = SourceRequest::orderBy('id','desc')->get();
        return view('frontend.source.list',$this->data_view);
    }

    public function detail($id){

    }

    public function post(Request $request){
        $data = $request->all();
        //dd($data);
        //先检查一下是否以Supplier的用户登录了
        $user = $request->session()->get('user_data');
        if($user == null || $user['group'] != 3){
            Session::put($data);
            return redirect('user/login');
        }else{
            $source =  $this->_handlePostedData($data,$user['id']);
            return redirect('source-list');
        }
    }

    public function _handlePostedData($data,$id){
        $source = $data['source'];
        //dd($data);
        $source['user_id'] = $id;
        $source_obj = SourceRequest::create($source);
        if($source_obj){
            $medias = explode(',',$data['attachment']);
            foreach ($medias as $media){
                $media_obj = Media::find($media);
                if($media_obj){
                    $media_obj->target_id = $source_obj->id;
                    $media_obj->save();
                }
            }
        }
        return $source_obj;
    }

}
