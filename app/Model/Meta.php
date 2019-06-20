<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $fillable = [
        'type','target_id','title','title_cn','keywords','keywords_cn','description','description_cn'
    ];

    public static $FOR_GENERAL  = 0;    // 无针对的类型
    public static $FOR_PRODUCT  = 1;
    public static $FOR_CATEGORY = 2;
    public static $FOR_CUSTOMER = 3;
    public static $FOR_GALLERY  = 4;
}
