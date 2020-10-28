@extends('layouts.admin')
@section('title','Products')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="col-lg-6 right">
                                <div style="margin-top:20px; margin-bottom:20px">
                                    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                </div>
                                <!-- add modal -->

                            </div>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Danh mục</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th width='11%'>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thông tin chi tiết</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr style="text-align: center;">
                                        <td>{{ $product->id}}</td>
                                        <td>{{ $product->categories->name}}</td>
                                        <td>{{ $product->ten}}</td>
                                        <td><img src="../upload/{{ $product->anh }}" width="120" height="120" /></td>
                                        <td>{{number_format($product->gia_sp,0,',','.')}} đ</td>
                                        <td>{{ $product->so_luong}}</td>
                                        <td class="label_title"> <?php echo $product->thong_tin_cu_the ?></td>
                                        <td>
                                            <div class="row action-button" style="padding-left: 10px; padding-right:10px">
                                                <!-- edit button -->
                                                <div class="action-edit">
                                                    <p><a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a></p>

                                                </div>
                                                <!-- delete button -->
                                                <div class="action-delete">
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p><input class="btn btn-danger" type="submit" value="Xóa"></p>
                                                    </form>
                                                </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div id="pagination">
                                {{$products->links()}}
                            </div>
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