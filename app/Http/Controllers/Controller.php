<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data_view = [];

    public function _saveUserInSession(User $user,$type = null){
       Session::put('user_data',[
           'id'=>$user->id,
           'name'=>$user->name,
           'email'=>$user->email,
           'group'=>$user->group_id,
           'type'=>$type,
       ]);
    }
}
