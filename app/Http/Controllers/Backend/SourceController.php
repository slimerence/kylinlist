<?php

namespace App\Http\Controllers\Backend;

use App\Model\Suppliers\Supplier;
use App\Model\SourceRequest;
use App\Model\Suppliers\SupplierManagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourceController extends Controller
{
    public function list(){
        $sources = SourceRequest::orderBy('created_at','desc')->get();
        $this->data_view['sources'] = $sources;
        $this->data_view['data_table'] = true;
        return view('backend.source.list',$this->data_view);
    }

    /**
     * 改变当前Source被认证的状态
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleStatus($id){
        $source = SourceRequest::find($id);
        if($source){
            $status = SupplierManagement::getVerifyStatus(SupplierManagement::$TYPE_SOURCE,$source->id);
            //dd($status);
            if($status->status ==0){
                $status->status = 1;
            }else{
                $status->status = 0;
            }
            $status->save();
            return back();
        }
    }

    /**
     * 删除指定ID的Source Request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $supplier = SourceRequest::find($id);
        if($supplier){
            $supplier->delete();
            SupplierManagement::getVerifyStatus(SupplierManagement::$TYPE_SOURCE,$id)->delete();
            return back();
        }
    }

}
