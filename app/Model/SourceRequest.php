<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SourceRequest extends Model
{
    protected $fillable = [
        'name','category_id','description','quantity','unit','valid_date'
    ];



}
