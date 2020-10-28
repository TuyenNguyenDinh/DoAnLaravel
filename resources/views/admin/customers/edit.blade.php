@extends('layouts.admin')
@section('main')
@section('title','Edit Customer')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Khách hàng</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa khách hàng</div>
                <div class="panel-body">
                    <form action="{{ route('customers.update', $customers->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input type="text" name="name" value="{{ $customers->name}}" class="form-control">
                                    @if ($errors->has('name'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('name')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="sdt" value="{{ $customers->sdt}}" class="form-control">
                                    @if ($errors->has('sdt'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('sdt')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="dia_chi" value="{{ $customers->dia_chi }}" class="form-control">
                                    @if ($errors->has('dia_chi'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('dia_chi')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="mail" value="{{ $customers->mail}}" class="form-control">
                                    @if ($errors->has('mail'))
                                    <span class="help-block">
                                        <strong style="color: red;"> {{ $errors->first('mail')}}</strong>
                                    </span>
                                    @endif
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('customers.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endsection