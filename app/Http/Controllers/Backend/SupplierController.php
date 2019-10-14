<?php

namespace App\Http\Controllers\Backend;

use App\Model\Catalog\Product;
use App\Model\Catalog\ProductCategory;
use App\Model\Category;
use App\Model\Suppliers\Supplier;
use App\Model\Suppliers\SupplierManagement;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

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
        $this->data_view['data_table'] = true;
        if($supplier){
            $this->data_view['supplier'] = $supplier;
            $this->data_view['cats'] = Category::orderby('id','asc')->get();
            $this->data_view['products'] = $supplier->products;
            return view('backend.supplier.view',$this->data_view);
        }
    }

    /**
     * 改变当前Supplier被认证的状态
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleStatus($id){
        $supplier = Supplier::find($id);
        if($supplier){
            $status = $supplier->getManagement();
            if($status->status ==0){
                $status->status = 1;
            }else{
                $status->status = 0;
            }
            $status->save();
            return back();
        }
    }

    public function delete($id){
        $supplier = Supplier::find($id);
        if($supplier){
            $supplier->delete();
            SupplierManagement::getVerifyStatus(SupplierManagement::$TYPE_SUPPLIER,$id)->delete();
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

    /**
     * 管理员用来检查对应Supplier的特定产品的方法
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function product_view(Request $request,$id){
        $data = $request->session()->get('user_data');
        $product = Product::find($id);
        $supplier = $product->supplier;
        //dd($product->getCategory());
        $this->data_view['cats'] = Category::orderby('id','asc')->get();
        $this->data_view['product']=$product;
        $this->data_view['supplier']=$supplier;
        return view('backend.supplier.product',$this->data_view);
    }

    public function product_update(Request $request){
        $data = $request->all();
        $product = [];
        $p = $request->get('p');
        $product['name'] = $p['name'];

        $product['supplier_id']=$p['supplier_id'];
        $product['sku']=$p['sku'];
        $product['unit']=$p['unit'];
        $product['min_order']=$p['min_order'];
        $product['position']=$p['position'];
        $product['short_description']=$p['short_description'];
        $product['description']=$p['description'];

        if(key_exists('is_display',$p)) {
            $product['is_display'] = 1;
        }else{
            $product['is_display'] = 0;
        }
        if(key_exists('is_promote',$p)) {
            $product['is_promote'] = 1;
        }else{
            $product['is_promote'] = 0;
        }

        if(is_null($request->get('id'))){
            $product['uuid'] = Uuid::uuid1()->toString();
            $product['url'] = str_replace("-", " ", $p['name']);;
            $pd = Product::create($product);
        }else{
            $pd = Product::find($request->get('id'));
            $product['uuid'] = $pd->uuid;
            $product['url'] = $pd->url;
        }
        if(key_exists('image_path',$data['p'])){
            $image = $data['p']['image_path'];
            if($image){
                $storagePath = _buildUploadFolderPath();
                $mediaFor = MediaTool::$FOR_PRODUCT_MAIN;
                //dd($image);
                $name = str_replace(" ", "_", $image->getClientOriginalName());
                //get image file.
                $path = $image->storeAs($storagePath,$name,'public');
                // 保存到数据库中
                $avatar = Media::Persistent(
                    $pd->id,
                    MediaTool::GuessFileTypeByExtensionName($image->extension()),
                    _buildFrontendAssertPath($path),
                    $name,
                    $mediaFor
                );
                $pd->image_path = $avatar->url;
            };
        }
        foreach ($product as $key=>$value){
            $pd->$key = $value;
        }
        $pd->save();

        $cat = $request->get('cat');
        ProductCategory::saveData($pd,$cat);

        return redirect('admin/suppliers');
    }
}
