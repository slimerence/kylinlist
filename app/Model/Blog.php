<?php

namespace App\Model;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{

    protected $fillable = [
        'title','url', 'category_id','content','seo_id','status','feature_image','position'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function Persistent($data){
        $info = [];
        $info['title'] = $data['title'];
        $info['url']= $data['url'];
        $info['position'] = $data['position'];
        $info['category_id'] = $data['category_id'];
        $info['content'] = $data['content'];
        if(isset($data['status'])){
            $info['status'] = 1;
        }
        if(isset($data['id'])){
            $blog = Blog::find($data['id']);
            Blog::where('id',$data['id'])->update($info);
        }else{
            $blog = Blog::create($info);
        }
        return $blog;
    }
}
