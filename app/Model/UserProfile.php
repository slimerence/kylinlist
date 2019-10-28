<?php

namespace App\Model;

use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'company_name','user_id','contact_person','contact_email','contact_info','avatar_path','contact_number',
        'link','street','street2','city','state','post','country','description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getProfileImage(){
        $media = Media::where('for',MediaTool::$FOR_USER_AVATAR)->where('target_id',$this->user->id)->first();
        return $media;
    }
}
