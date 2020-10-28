<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_details';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function products(){
        return $this->belongsTo('App\Models\Product','product_id');
    }

    function bills(){
        return $this->belongsTo('App\Models\Bill','bill_id');
    }

    protected $fillable = [
        'bill_id',
        'product_id',
        'so_luong_mua',
        'don_gia',
    ];
}
