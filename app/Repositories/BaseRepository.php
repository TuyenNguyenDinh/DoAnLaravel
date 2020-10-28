<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    public $sortBy = 'created_at';
    public $sortOrder = 'asc';
    public function all()
    {
        return $this->model->orderBy($this->sortBy, $this->sortOrder)->get();
    }

    public function paginated($paginate)
    {
        return $this->model->orderBy($this->sortBy, $this->sortOrder)->paginate($paginate);
    }

    public function create($input)
    {
        $model = $this->model;
        $model->fill($input);
        $model->save();

        return $model;
    }

    public function find($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function destroy($id)
    {
        return $this->find($id)->delete();
    }

    // public function update(array $attributes = [])
    // {
    //     return $this->update($attributes);
    // }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }
    
    public function save(Model $model)
    {
        return $model->save();
    }
}
