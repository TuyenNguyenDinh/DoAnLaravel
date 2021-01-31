<?php
namespace App\Repositories;

class BillEloquentRepository extends EloquentRepository{
    public function getClassModel()
    {
        return \App\Models\Bill::class;
    }
}
