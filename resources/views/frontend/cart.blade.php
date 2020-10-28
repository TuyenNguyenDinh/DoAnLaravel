@extends('layouts.home')
@section('title','Giỏ hàng')
@section('main')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
<script type="text/javascript">
    function updateCart(qty, rowId){
        $.get(
            '{{asset('cart/update')}}', //đường dẫn lên server
            {qty:qty ,rowId:rowId},
            function(){
                location.reload();
            }
        );
    }
</script>
<div id="wrap-inner">
    <div id="list-cart">
        <h3>Giỏ hàng</h3>
        @if(Cart::count()>=1)
        <form>
            <table class="table table-bordered .table-responsive text-center">
                <tr class="active">
                    <td width="11.111%">Ảnh mô tả</td>
                    <td width="22.222%">Tên sản phẩm</td>
                    <td width="22.222%">Số lượng</td>
                    <td width="16.6665%">Đơn giá</td>
                    <td width="16.6665%">Thành tiền</td>
                    <td width="11.112%">Xóa</td>
                </tr>
                @foreach($items as $product)
                <tr>
                    <td><img class="img-responsive" src="{{asset('upload/'.$product->options->img)}}"></td>
                    <td>{{$product->name}}</td>
                    <td>
                        <div class="form-group">
                            <input class="form-control" type="number" value="{{$product->qty}}" onchange="updateCart(this.value, '{{$product->rowId}}')">
                        </div>
                    </td>
                    <td><span class="price">{{number_format($product->price,0,',','.')}} đ</span></td>
                    <td><span class="price">{{number_format($product->price*$product->qty,0,',','.')}} đ</span></td>
                    <td><a href="{{asset('cart/delete/'.$product->rowId)}}">Xóa</a></td>
                </tr>
                @endforeach
            </table>
            <div class="row" id="total-price">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    Tổng thanh toán: <span class="total-price">{{$total}} đ</span>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="{{asset('/')}}" class="my-btn btn">Mua tiếp</a>
                    <a href="{{asset('cart/update/'.$product->rowId)}}" class="my-btn btn">Cập nhật</a>
                    <a href="{{asset('cart/delete/all')}}" class="my-btn btn">Xóa giỏ hàng</a>
                </div>
            </div>
        </form>
    </div>
    <div id="xac-nhan">
        <h3>Xác nhận mua hàng</h3>
        <form method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input required type="email" class="form-control" id="email" name="email">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('email')}}</strong></br>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input required type="text" class="form-control" id="name" name="name">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('name')}}</strong></br>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input required type="number" class="form-control" id="phone" name="phone">
                @if ($errors->has('add'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('name')}}</strong></br>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="add">Địa chỉ:</label>
                <input required type="text" class="form-control" id="add" name="add">
                @if ($errors->has('add'))
                <span class="help-block">
                    <strong style="color: red;">{{ $errors->first('add')}}</strong></br>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="note">Ghi chú (Yêu cầu về hàng hóa, vận chuyển,...):</label>
                <textarea type="text" class="form-control" id="note" name="note" style="height: 300px;"></textarea>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
            </div>
            {{csrf_field()}}
        </form>
    </div>
    @else
    <h2>Giỏ hàng hiện đang trống</h2>
    @endif
</div>

@endsection