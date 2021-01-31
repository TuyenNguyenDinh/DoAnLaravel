<?php
namespace App\Repositories;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class BillDetailsRepository extends BaseRepository{
    protected $billdetails;

    public function __construct(BillDetail $billdetails)
    {
        $this->billdetails = $billdetails;
    }

    public function all(){
        return $this->billdetails->all();
    }

}
