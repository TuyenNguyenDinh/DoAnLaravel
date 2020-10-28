<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function billDetails(){
        return $this->hasMany('App\Models\BillDetail');
    }


    protected $fillable = [
        'name',
        'sdt',
        'dia_chi',
        'mail',
    ];
}
