<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products = Product::paginate(2);
        $categories = Category::all();
        return view('admin.products.index', array('products' => $products, 'categories' =>$categories));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', array('categories' => $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $fileName = $this->doUpload($request);
        $products = Product::create(array_merge($request->all(), ["anh" =>$fileName]));
        if ($products) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.create');
    }

    private function doUpload(ProductRequest $request)
    {
        $fileName = "";
        //Kiểm tra file
        if ($request->file('anh')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $request->file('anh')->getClientOriginalExtension(); // Lấy . của file
			
			// Filename cực shock để khỏi bị trùng
			$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
						
			// Thư mục upload
			$uploadPath = public_path('/upload'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$request->file('anh')->move($uploadPath, $fileName);
		}
		else {
        }
        return $fileName;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        return view('admin.products.edit', array('products'=>$products, 'categories' => $categories));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {

        $fileName = $this->doUpload($request);
        $products = Product::find($id);
        $products->update(array_merge($request->all(), ["anh" =>$fileName]));
        if($products){
            return redirect()->route('products.index');
        }
        return redirect()->route('admin.products.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
