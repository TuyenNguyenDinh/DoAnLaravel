<?php
namespace App\Repositories;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class BillRepository extends BaseRepository{
    protected $bill;

    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    public function all(){
        return $this->bill->all();
    }

}
