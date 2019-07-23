<?php

namespace App\Model;

use App\Models\Media;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Model;
/**
 * @mixin Eloquent
 */

class Category extends Model
{
    protected $fillable = [
        'name','name_cn', 'url', 'parent_id','level','seo_id','status','position','page_id'
    ];

    public function supplier(){
        return $this->hasMany(Supplier::class);
    }

    public function pageInfo(){
        return $this->belongsTo(PageInfo::class,'page_id');
    }

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

    public function getImage(){
        $image = Media::where('for',2)->where('target_id',$this->id)->first();
        return $image;
    }

    public function getSeo(){
        $seo = Meta::find($this->seo_id);
        if($seo==null){
            $seo = self::createSeo();
            $this->seo_id = $seo->id;
            $this->save();
        }
        return $seo;
    }

    public function createSeo(){
        $seo = new Meta();
        $seo->type = Meta::$FOR_CATEGORY;
        $seo->target_id = $this->id;
        $seo->save();
        return $seo;
    }

    /**
     * @param $data
     * @return mixed
     * Function for save category data
     */
    public static function Persistent($data){
        $info = [];
        $info['name'] = $data['name'];
        $info['name_cn'] = $data['name_cn'];
        $info['url']= $data['url'];
        $info['position'] = $data['position'];
        $info['level'] = $data['level'];
        $info['status'] = 0;
        if($info['level']==1){
            $info['parent_id']= 0;
        }else{
            $info['parent_id']= $data['main'];
        }
        if(isset($data['status'])){
            $info['status'] = 1;
        }
        if(isset($data['id'])){
            $category = Category::find($data['id']);
            Category::where('id',$data['id'])->update($info);
        }else{
            $category = Category::create($info);
        }

        return $category;
    }

    public function countSupplier(){
        $cat = [];
        $cat[]=$this->id;
        $children = self::where('parent_id',$this->id)->get();
        foreach ($children as $child){
            $cat[]=$child->id;
        }
        $suppliers = Supplier::whereIn('category_id',$cat)->get();

        return $suppliers;
    }

    public function getSupplier(){
        $cat = [];
        $cat[]=$this->id;
        $children = self::where('parent_id',$this->id)->get();
        foreach ($children as $child){
            $cat[]=$child->id;
        }
        $suppliers = Supplier::whereIn('category_id',$cat);

        return $suppliers;
    }

}
