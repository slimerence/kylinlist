<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public static $array_category = ['Real Estate','Electronics','Jobs','Vehicles','Mobiles','Services','Fashions','Education'];

    public static function getCateName($id){
        return self::$array_category[$id];
    }
}
