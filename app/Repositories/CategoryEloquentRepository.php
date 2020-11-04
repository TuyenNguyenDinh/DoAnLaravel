<?php
namespace App\Repositories;

class CategoryEloquentRepository extends EloquentRepository{
    public function getModel()
    {
        return \App\Models\Category::class;
    }
}
