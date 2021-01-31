<?php
namespace App\Repositories;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class CategoryRepository extends BaseRepository{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function all(){
        return $this->category->all();
    }

    public function create($attributes){
        return $this->category->create($attributes);
    }

    public function find($id)
    {
        return $this->category->find($id);
    }

    public function update($id, array $attributes){
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function delete($id){
        return $this->category->delete($id);
    }

    public function search(){
        return $this->category->get();
    }
}
