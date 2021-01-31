<?php
namespace App\Repositories;

class BillDetailsEloquentRepo extends EloquentRepository{
    public function getClassModel()
    {
        return \App\Models\BillDetail::class;
    }
}
