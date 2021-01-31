<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\CategoryEloquentRepository;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{

    protected $categories;

    public function __construct(CategoryEloquentRepository $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = $this->categories->getAll();
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
    public function store(Request $request)
    {
        $data = $request->all();
        $result = $this->categories->create($data);
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
       $result = $this->categories->find($id);
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

    public function showById($id){
        $result = $this->categories->find($id);
        return response()->json($result->products);
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

        $result = $this->categories->update($id, $data);

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
        $this->categories->delete($id);
        return api_success(
            array('data' => "ok")
        );
    }

}
