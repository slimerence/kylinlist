<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public static $Free  = 0;    // 无针对的类型
    public static $Normal  = 1;
    public static $High = 2;

    protected $fillable = [
        'name','seo_id','user_id','category_id','type','contact_person','contact_email','contact_info','avatar_path','contact_number',
        'link','street','street2','city','state','post','country','description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
