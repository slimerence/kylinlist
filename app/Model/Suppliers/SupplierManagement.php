<?php

namespace App\Model\Suppliers;

use Illuminate\Database\Eloquent\Model;

class SupplierManagement extends Model
{
    /**
     * 用于控制Supplier前端显示的Model
     * @var array
     */
    protected $fillable = [
       'supplier_id','status','other'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

}
