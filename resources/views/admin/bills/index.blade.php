@extends('layouts.admin')
@section('title','Bills')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách hóa đơn</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th width='18%'>Khách hàng</th>
                                        <th width='10%'>Ngày lập hóa đơn</th>
                                        <th>Nơi nhận hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng</th>
                                        <th width="20%">Ghi chú</th>
                                        <th>Nhân viên thực hiện</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bills as $bill)
                                    <tr style="text-align:center;">
                                        <td>{{ $bill->id}}</td>
                                        <td>{{ $bill->customers->name}}</td>
                                        <td>{{ $bill->ngaylap_hd}}</td>
                                        <td>{{ $bill->noi_nhan_hang}}</td>
                                        <td>{{ number_format($bill->tong_tien,0,',','.')}} đ</td>
                                        <td>{{ $bill->tinh_trang}}</td>
                                        <td>{{ $bill->ghi_chu}}</td>
                                        <td>{{ $bill->users->name}}</td>
                                    <td>
                                        <div class="row action-button" style="padding-left: 10px; padding-right:10px">
                                            <!-- edit button -->
                                            <div class="action-edit">
                                                <p><a href="{{asset('admin/billdetail/'.$bill->id.'.html')}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Chi tiết</a></p>
                                            </div>
                                            <!-- delete button -->
                                            <div class="action-delete">
                                                <form action="{{ route('bills.destroy', $bill->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <p><input class="btn btn-danger" style="width: 71px;" type="submit" value="Xóa"></p>
                                                </form>
                                            </div>
                                    </td>
                                    </tr>
                                    @endforeach
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