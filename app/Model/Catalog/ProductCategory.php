<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $timestamps = false;
    protected $fillable = ['category_id','product_id','position'];


    public static function saveData(Product $product,$category){
        self::where('product_id',$product)->delete();
        $data = [];
        //dd($category);
        if(!($category==['']) && !is_null($category)) {
            foreach ($category as $key => $cat) {
                $data[] = self::create(
                    [
                        'product_id' => $product->id,
                        'category_id' => $cat,
                    ]
                );
            };
        }
        return $data;
    }
}
