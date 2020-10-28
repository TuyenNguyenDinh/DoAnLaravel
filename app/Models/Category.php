<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function products(){
        return $this->hasMany('App\Models\Product', 'category_id');
    }

    protected $fillable = [
        'name',
    ];

    protected $hidden = ["created_at", "updated_at"];
}
