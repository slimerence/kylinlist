<?php

namespace App\Model\Suppliers;

use App\Model\Catalog\Product;
use App\Model\Category;
use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public static $Free  = 0;    // 无针对的类型
    public static $Normal  = 1;
    public static $High = 2;

    protected $fillable = [
        'name','seo_id','user_id','category_id','url','type','contact_person','contact_email','contact_info','avatar_path','contact_number',
        'link','street','street2','city','state','post','country','description','business_type','main_product'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function getProfileImage(){
        $media = Media::where('for',MediaTool::$FOR_SUPPLIER_PROFILE)->where('target_id',$this->id)->first();
        return $media;
    }

    public function buildUrl(){
        if(!is_null($this->category) && $this->url !==''){
            return $this->category->url.'/supplier/'.$this->url;
        }else{
            return redirect('supplier/profile');
        }
    }

    /**
     * 用于前端获取Supplier控制类的方法，如果不存在该supplier对应的控制类，就创建一个新的
     * @return object
     */
    public function getManagement(){
        $management = SupplierManagement::getVerifyStatus(SupplierManagement::$TYPE_SUPPLIER,$this->id);
        return $management;
    }

    /**
     * 用于前端获取Supplier控制类的方法，如果不存在该supplier对应的控制类，返回布尔值
     * @return boolean
     */
    public function getStatus(){
        $management = SupplierManagement::getVerifyStatus(SupplierManagement::$TYPE_SUPPLIER,$this->id);
        return $management->status;
    }

}
