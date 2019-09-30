<?php

namespace App\Model;

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
}
