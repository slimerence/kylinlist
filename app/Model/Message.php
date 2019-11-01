<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'from_id',
        'to_id',
        'content',
        'title',
        'type',
        'status',
        'extra'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class,'to_id');
    }




}
