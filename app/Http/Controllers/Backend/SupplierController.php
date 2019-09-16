<?php

namespace App\Http\Controllers\Backend;

use App\Model\Category;
use App\Model\Suppliers\Supplier;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{

    public function list(){
        $suppliers = Supplier::orderBy('created_at','desc')->get();
        $this->data_view['suppliers'] = $suppliers;
        $this->data_view['data_table'] = true;
        return view('backend.supplier.list',$this->data_view);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $supplier = Supplier::find($id);
        if($supplier){
            $this->data_view['supplier'] = $supplier;
            $this->data_view['cats'] = Category::orderby('id','asc')->get();
            $this->data_view['products'] = $supplier->products;
            return view('backend.supplier.view',$this->data_view);
        }
    }

    public function enable($id){
        $supplier = Supplier::find($id);
        if($supplier){
            $status = $supplier->getManagement();
            $status->status = 1;
            $status->save();
            return back();
        }
    }

    public function disable($id){
        $supplier = Supplier::find($id);
        if($supplier){
            $status = $supplier->getManagement();
            $status->status = 0;
            $status->save();
            return back();
        }
    }

    /**
     * 获取Post数据，更新Supplier Profile表单
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function profile_update(Request $request){
        $data = $request->all();
        $supplier = Supplier::find($request->get('supplier_id'));
        //dd($data);
        $supplier_data = $request->get('supplier');
        //dd($supplier_data);
        if($supplier){
            foreach ($supplier_data as $key=>$value){
                $supplier->$key = $value;
            }
            if(key_exists('name',$supplier_data)){
                $supplier->url = str_replace(" ", "_", $supplier_data['name']);
            }
            if(key_exists('avatar_path',$data['supplier'])){
                $image = $data['supplier']['avatar_path'];
                if($image){
                    $storagePath = _buildUploadFolderPath();
                    $mediaFor = MediaTool::$FOR_AVATAR;
                    //dd($image);
                    $name = str_replace(" ", "_", $image->getClientOriginalName());
                    //get image file.
                    $path = $image->storeAs($storagePath,$name,'public');
                    // 保存到数据库中
                    $avatar = Media::Persistent(
                        $supplier->id,
                        MediaTool::GuessFileTypeByExtensionName($image->extension()),
                        _buildFrontendAssertPath($path),
                        $name,
                        $mediaFor
                    );
                    $supplier->avatar_path = $avatar->url;
                };
            }

            $supplier->save();
        }
        return redirect('/admin/suppliers');
    }
}
