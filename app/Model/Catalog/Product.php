<?php

namespace App\Model\Catalog;

use App\Model\Category;
use App\Model\Suppliers\Supplier;
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

    public function category(){
        return $this->belongsToMany(ProductCategory::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function getCategory(){
        $data = ProductCategory::where('product_id',$this->id)->get();
        $cat = [];
        foreach ($data as $value){
            $cat[] = $value->category_id;
        }
        $category = Category::whereIn('id',$cat)->get();
        return $category;
    }

    public function getMainCategory(){
        $data = ProductCategory::where('product_id',$this->id)->get();
        $cat = [];
        foreach ($data as $value){
            $cat[] = $value->category_id;
        }
        $category = Category::whereIn('id',$cat)->first();
        return $category;
    }

}
