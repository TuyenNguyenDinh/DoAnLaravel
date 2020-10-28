@extends('layouts.admin')
@section('title','Bills')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Chi tiết hóa đơn</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="col-lg-6 right">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Thông tin người đặt hàng</td>
                                            <td>{{$bills->customers->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày đặt hàng</td>
                                            <td>{{$bills->ngaylap_hd}}</td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td>{{$bills->customers->sdt}}</td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ</td>
                                            <td>{{$bills->noi_nhan_hang}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$bills->customers->mail}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ghi chú</td>
                                            <td>{{$bills->ghi_chu}}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-6 left">
                                <form action="{{ route('bills.update', $bills->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row" style="margin-bottom:40px">
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                                <label>Tình trạng</label>
                                                <select type="text" name="tinh_trang" class="form-control">
                                                    <option value="Chờ xử lý">Chờ xử lý</option>
                                                    <option value="Xác nhận bởi người mua hàng">Xác nhận bởi người mua hàng</option>
                                                    <option value="Xác nhận bởi người bán">Xác nhận bởi người bán</option>
                                                    <option value="Hủy đơn hàng">Hủy đơn hàng</option>
                                                    <option value="Hoàn trả tiền">Hoàn trả tiền</option>
                                                    <option value="Đã giao hàng">Đã giao hàng</option>
                                                </select>
                                            </div>
                                            <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary" style="text-align: center;">
                                        <td>ID</td>
                                        <td>Bill</td>
                                        <td width="20%">Sản phẩm</td>
                                        <td width="15%">Số lượng</td>
                                        <td>Đồng giá</td>
                                        <td>Thành tiền</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($billdetails as $billdetail)
                                    <tr style="text-align:center;">
                                        <td>{{ $billdetail->id }}</td>
                                        <td>{{ $billdetail->bill_id}}</td>
                                        <td>{{ $billdetail->products->ten }}</td>
                                        <td>{{ $billdetail->so_luong_mua }}</td>
                                        <td>{{ number_format($billdetail->don_gia,0,',','.')}} VND</td>
                                        <td>{{ number_format($billdetail->don_gia * $billdetail->so_luong_mua,0,',','.')}} VND</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5">Tổng tiền:</td>
                                        <td class="total-price" style="text-align: center;">{{number_format($billdetail->bills->tong_tien,0,',','.')}} VNĐ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection