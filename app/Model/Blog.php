<?php

namespace App\Model;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    protected $fillable = [
        'title','url', 'category_id','content','seo_id','status','feature_image'
    ];

}
