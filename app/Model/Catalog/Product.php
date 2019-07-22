<?php

namespace App\Model\Catalog;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin Eloquent
 */

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','uuid','sku' ,
        'url','image_path',
        'unit','min_order',
        'seo_id',
        'position',
        'is_display',
        'is_promote',
        'short_description',
        'description',
        'supplier_id',
    ];



}
