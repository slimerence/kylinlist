<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageInfo extends Model
{
    protected $fillable = [
        'slug','description','slug_cn','description_cn'
    ];
}
