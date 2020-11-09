<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
    public function getAddCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->ten, 'qty' => 1, 'price' => $product->gia_sp, 'weight' => 550, 'options' => ['img' => $product->anh]]);
        return redirect('cart/show');
    }
    public function getShowCart()
    {
        $data['items'] = Cart::content();
        $data['total'] = Cart::total(0);
        return view('frontend.cart', $data);
    }
    public function getDeleteCart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
    }

    public function postComplete(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->sdt = $request->phone;
        $customer->dia_chi = $request->add;
        $customer->mail = $request->email;
        $customer->save();

        $bill = new Bill();
        $bill->customer_id = $customer->id;
        $bill->ngaylap_hd = date('Y-m-d');
        $bill->noi_nhan_hang = $request->add;
        $bill->tong_tien = Cart::total(0,'','');
        $bill->ghi_chu = $request->note;
        $bill->user_id = Auth::user()->id;
        $bill->save();

        foreach($data['cart'] as $product){
            $billdetail = new BillDetail();
            $billdetail->bill_id = $bill->id;
            $billdetail->product_id = $product->id;
            $billdetail->so_luong_mua = $product->qty;
            $billdetail->don_gia = $product->price;
            $billdetail->save();
        }
        Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('tuyennguyendinh1608@gmail.com', 'Tuyên Nguyễn Đình');
            $message->to($email, $email);
            $message->subject('Xác nhận mua hàng');
        });
        return redirect('complete');
    }

    public function getComplete()
    {
        Cart::destroy();
        return view('frontend.complete');
    }
}
