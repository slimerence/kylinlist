<?php

namespace App\Model\Suppliers;

use Illuminate\Database\Eloquent\Model;

class SupplierManagement extends Model
{
    /**
     * 用于控制Supplier前端显示的Model
     * @var array
     */
    protected $fillable = [
       'target_id','status','other','type'
    ];

    public static $TYPE_SUPPLIER=1;
    public static $TYPE_PRODUCT=2;
    public static $TYPE_MEDIA=3;
    public static $TYPE_SOURCE =4;

    /**
     * 一个全局的用于检验相关对象是否经过管理员认证过的方法
     * @param int $type
     * @param int $target_id
     * @return object
     */
    public static function getVerifyStatus(int $type, int $target_id){
        $management = self::where('type',$type)->where('target_id',$target_id)->first();
        if($management){
            return $management;
        }else{
            $management = self::create(['type'=>$type,'target_id'=>$target_id,'status'=>0]);
            return $management;
        }
    }


}
