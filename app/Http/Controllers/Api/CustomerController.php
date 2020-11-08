<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\CustomerEloquentRepository;

class CustomerController extends Controller
{
    
    protected $customers;

    public function __construct(CustomerEloquentRepository $customers)
    {
        $this->customers = $customers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = $this->customers->getAll();
        return api_success(
            array('data' => $result)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $result = $this->customers->create($data);

        return api_success(
            array('data' => $result)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = $this->customers->find($id);
        return api_success(
            array('data' => $result)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $result = $this->customers->update($id, $data);

        return api_success(
            array('data' => $result)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customers->delete($id);

        return api_success(
            array('data' =>"ok")
        );
    }
}
