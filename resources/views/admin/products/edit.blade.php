@extends('layouts.admin')
@section('main')
@section('title','Edit Product')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('products.update', $products->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select required type="number" name="category_id" class="form-control">
										@foreach ($categories as $category)
										<option @if($products->category_id == $category->id) selected @endif value="{{ $category->id}}">{{ $category->name}}</option>
										@endforeach
									</select>
                                </div>
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="ten" value="{{ $products->ten }}" class="form-control">
                                    @if ($errors->has('ten'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('ten')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file" name="anh"  id="task-name" class="form-control">
										@if ($errors->has('anh'))
										<span class="help-block">
											<strong style="color: red;"> {{ $errors->first('anh')}}</strong>
										</span>
										@endif
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required type="number" name="gia_sp" value="{{ $products->gia_sp }}" class="form-control">
                                    @if ($errors->has('gia_sp'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('gia_sp')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input required type="number" name="so_luong" value="{{ $products->so_luong }}" class="form-control">
                                    @if ($errors->has('so_luong'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('so_luong')}}</strong></br>
									</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Miêu tả</label><br>
                                    <textarea required name="thong_tin_cu_the" class="ckeditor" >{{ $products->thong_tin_cu_the}}</textarea>
                                    @if ($errors->has('thong_tin_cu_the'))
									<span class="help-block">
										<strong style="color: red;">{{ $errors->first('thong_tin_cu_the')}}</strong></br>
									</span>
									@endif
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('products.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        </>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endsection