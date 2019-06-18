<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','name_cn', 'url', 'parent_id','level','seo_id','status','position'
    ];

    public static $array_category = ['Real Estate','Electronics','Jobs','Vehicles','Mobiles','Services','Fashions','Education'];

    public static function getCateName($id){
        return self::$array_category[$id];
    }

    public function getRoot(){
        return self::where('level',1)->orderby('position','asc')->get();
    }

    public function getChildren(){
        $children = self::where('parent_id',$this->id)->orderby('position','asc')->get();
        return $children;
    }


}
