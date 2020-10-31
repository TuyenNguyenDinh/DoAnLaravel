<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    public function getHome(){
        $data['products']= Product::where('so_luong','>',20)->take(8)->get();
        $data['product_features'] = Product::where('gia_sp', '>', 10000000)->take(5)->get();
        $data['news']= Product::orderBy('id', 'desc')->take(12)->get();
        return view('frontend.welcome',$data);
    }

    public function getDetail($id){
        $data['item'] = Product::find($id);
        $data['product_features'] = Product::where('gia_sp', '>', 10000000)->take(5)->get();
        return view('frontend.details', $data);
    }

    public function getCategory($id){
        $data['categoryName'] = Category::find($id);
        $data['items'] = Product::where('category_id', $id)->paginate(2);
        $data['count'] = $data['items']->count();
        return view('frontend.categories',$data);
        dd($data['items']);
    }

    public function getSearch(Request $request){
        $result = $request->result;
        $result = str_replace(' ', '%', $result); //bỏ khoảng trắng
        $data['items'] = Product::where('ten','like','%'.$result.'%')->get();
        $data['keyword'] = $result;
        $data['count'] = $data['items']->count();
        return view('frontend.search',$data);
    }
}
