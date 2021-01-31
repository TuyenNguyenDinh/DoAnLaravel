<?php
namespace App\Repositories;
use App\Models\Customer;

class CustomerRepository extends BaseRepository{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function all(){
        return $this->customer->all();
    }

    public function create($attributes){
        return $this->customer->create($attributes);
    }

    public function find($id)
    {
        return $this->customer->find($id);
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
        return $this->customer->delete($id);
    }

    public function search(){
        return $this->customer->get();
    }
}
