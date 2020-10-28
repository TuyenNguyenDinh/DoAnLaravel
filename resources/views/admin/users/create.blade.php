@extends('layouts.admin')
@section('title', 'Add User')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nhân viên</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm nhân viên</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên nhân viên</label>
                                    <input require type="text" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('name')}}</strong></br>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input require type="text" name="email" class="form-control">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('email')}}</strong></br>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input required type="password" name="password" class="form-control">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password')}}</strong></br>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Phân quyền</label>
                                    <select type="text" name="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="guest">Guest</option>
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('users.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection