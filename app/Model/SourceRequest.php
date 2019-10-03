<?php

namespace App\Model;

use App\Models\Media;
use App\Models\Utils\MediaTool;
use App\User;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class SourceRequest extends Model
{
    protected $fillable = [
        'name','category_id','description','quantity','unit','valid_date','remark','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function attachments(){
        $attachments = Media::where('for',MediaTool::$FOR_SOURCING_REQUEST)->where('target_id',$this->id);
        return $attachments;
    }

}
