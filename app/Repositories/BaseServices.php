<?php
namespace App\Services;

    abstract class BaseService {
        public $repository;

        public function all(){
            return $this->repository->all();
        }
        
        public function create(array $input){
            return $this->repository->create($input);
        }

        public function find($id){
            return $this->repository->find($id);
        }

        public function update($id, array $input){
            return $this->repositoty->update($id, $input);
        }

        public function destroy($id){
            return $this->repository->destroy($id);
        }
    }
?>