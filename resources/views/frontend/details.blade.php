@extends('layouts.home')
@section('title','Chi tiết sản phẩm')
@section('main')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
<div id="wrap-inner" class="col-md-10" style="padding-top: 26px;">
    <div id="row list-product-info">
        <div class="clearfix"></div>
        <h3>{{$item->ten}}</h3>
        <div class="row">
            <div id="product-img" class="col-xs-12 col-sm-12 col-md-5 text-center">
                <div id="carouselExampleIndicatorsdd" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicatorsdd" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicatorsdd" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicatorsdd" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('image/samsung.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('image/samsung1.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img src="{{asset('upload/'. $item->anh)}}" alt="Thirt slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicatorsdd" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicatorsdd" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="product-details" class="col-xs-12 col-sm-12 col-md-6">
                <p>Giá: <span class="price">{{number_format($item->gia_sp,0,',','.')}}₫</span></p>
                <p>Bảo hành: 1 đổi 1 trong 12 tháng</p>
                <p>Phụ kiện: Dây cáp sạc, tai nghe</p>
                <p>Tình trạng: Máy mới 100%</p>
                <p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
                <p>Còn hàng: Còn {{$item->so_luong}} sản phẩm</p>
                <p class="add-cart text-center"><a href="{{asset('cart/add/'.$item->id)}}">Đặt hàng online</a></p>
            </div>
        </div>
    </div>
    <div id="product-detail">
        <h3>Chi tiết sản phẩm</h3>
        <p class="text-justify"><?php echo $item->thong_tin_cu_the ?></p>
    </div>
    <div id="comment">
        <h3>Bình luận</h3>
        <div class="comment">
            <form>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input required type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="cm">Bình luận:</label>
                    <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-send btn-default">Gửi</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- end main -->
@endsection