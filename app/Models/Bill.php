<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function billDetails(){
        return $this->hasMany('App\Models\BillDetail');
    }
    function customers(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    function users(){
        return $this->belongsTo('App\User','user_id');
    }


    protected $fillable = [
        'customer_id',
        'ngaylap_hd',
        'noi_nhan_hang',
        'tong_tien',
        'ghi_chu',
        'user_id',
        'tinh_trang',
    ];
}
