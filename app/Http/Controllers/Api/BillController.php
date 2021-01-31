<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\BillEloquentRepository;

class BillController extends Controller
{

    protected $bills;

    public function __construct(BillEloquentRepository $bills)
    {
        $this->bills = $bills;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = $this->bills->getAll();
        // return api_success(
        //     array('data' => $result)
        // );
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function created(Request $request)
    {
        $data = $request->all();
        $result = $this->bills->create($data);

        return response()->json($result);
    }

    public function show($id)
    {
       $result = $this->bills->find($id);
        return response()->json($result);
    }

}
