<?php

namespace App\Http\Controllers\Backend\Supplier;

use App\Model\Catalog\Product;
use App\Model\Catalog\ProductCategory;
use App\Model\Category;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class ProductController extends Controller
{
    public function list(Request $request){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }
        $supplier = $user->supplier;
        $products = $supplier->products;
        $this->data_view['products'] = $products;
        $this->data_view['user'] = $user;
        return view('supplier.products.list',$this->data_view);
    }

    public function create(Request $request){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }
        $this->data_view['user'] = $user;
        $this->data_view['product'] = new Product;
        $this->data_view['cats'] = Category::orderby('id','asc')->get();
        return view('supplier.products.view',$this->data_view);
    }

    public function view(Request $request,$id){
        $data = $request->session()->get('user_data');
        $user = User::find($data['id']);
        if($user->supplier ==null ){
            $user->createRelatedSupplier();
        }
        $product = Product::find($id);
        //dd($product->getCategory());
        $this->data_view['user'] = $user;
        $this->data_view['cats'] = Category::orderby('id','asc')->get();
        $this->data_view['product']=$product;
        return view('supplier.products.view',$this->data_view);
    }

    public function update(Request $request){
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

        return redirect('supplier/product/list');
    }
}
