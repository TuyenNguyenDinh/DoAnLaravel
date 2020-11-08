<?php
namespace App\Repositories;

class CategoryEloquentRepository extends EloquentRepository{
    public function getClassModel()
    {
        return \App\Models\Category::class;
    }
}
