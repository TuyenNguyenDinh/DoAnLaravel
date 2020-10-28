@extends('layouts.home')
@section('title','ShopA-Z')
@section('main')
<div id="main" class="col-lg-9 col-md-12 col-sm-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/slide-1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/slide-2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/slide-3.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span> -->
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span> -->
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-12 col-sm-12">
    <div class="product-feature">
        @foreach ($product_features as $product_features)
        <div class="product-feature_item">
            <div class="item-img pull-left">
                <a href="">
                    <img src="{{asset('upload/'. $product_features->anh) }}" alt="" style="height: 70px; width: 50px;">
                </a>
            </div>
            <div class="item-content pull-right">
                <h3 class="item">
                    <a href="{{asset('/detail/' .$product_features->id. '.html')}}">{{$product_features->ten}}</a>
                </h3>
                <div class="product-feature_price">
                    <span>{{number_format($product_features->gia_sp,0,',','.')}} đ</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="wrap-inner">
    <div class="products">
        <div class="products-tab hidden-xs hidden-sm display-flex-center content-space-between">
            <ul class="nav nav-pills" style="padding-bottom: 12px;">
                <li class="nav-item">
                    <a class="nav-link active" href="#hot-products" data-toggle="tab">Sản phẩm nổi bật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#new-products" data-toggle="tab">Sản phẩm mới</a>
                </li>
            </ul>
        </div>
        <div class="products-tab-content">
            <div id="hot-products" class="tab-pane container fade active in">
                <h3>Sản phẩm nổi bật</h3>
                <div class="product-list row">
                    @foreach($products as $product)
                    <div class="product-item col-md-3 col-sm-6 col-xs-12">
                        <a href="#"><img src="{{asset('upload/'. $product->anh)}}" style="height: 100px;" class="img-thumbnail"></a>
                        <p><a href="#">{{ $product->ten}}</a></p>
                        <p class="price">{{number_format( $product->gia_sp,0,',','.')}}₫</p>
                        <div class="marsk">
                            <a href="{{asset('detail/'.$product->id.'.html')}}">Xem chi tiết</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="new-products" class="tab-pane container fade">
                <h3>sản phẩm mới</h3>
                <div class="product-list row">
                    @foreach($news as $product)
                    <div class="product-item col-md-3 col-sm-6 col-xs-12">
                        <a href="#"><img src="{{asset('upload/'. $product->anh)}}" style="height: 100px;" class="img-thumbnail"></a>
                        <p><a href="#">{{ $product->ten}}</a></p>
                        <p class="price">{{number_format( $product->gia_sp,0,',','.')}}₫</p>
                        <div class="marsk">
                            <a href="{{asset('detail/'.$product->id.'.html')}}">Xem chi tiết</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
    <div class="boxfooter">
        <span>Tìm kiếm nhiều:</span>
        <a href="{{asset('search?result=samsung')}}">• Samsung</a>
        <a href="{{asset('search?result=may+giat')}}">• Máy giặt</a>
        <a href="{{asset('search?result=may+bom+nuoc')}}">• Máy bơm nước</a>
        <a href="{{asset('search?result=Loa+Karaoke')}}">• Loa Karaoke</a>
        <a href="{{asset('search?result=ti+vi+sony')}}">• Tivi Sony</a>
        <a href="{{asset('search?result=ti+vi+samsung')}}">• Tivi Samsung</a>
        <a href="{{asset('search?result=quat+dieu+hoa')}}">• Quạt điều hòa</a>
        <a href="{{asset('search?result=tulanh')}}">• Tủ lạnh</a>
        <a href="{{asset('search?result=maygiat')}}">• Máy giặt mới 2020</a>
        <a href="{{asset('search?result=maygiat+Midea')}}">• Máy giặt Midea</a>
        <a href="{{asset('search?result=maygiat+lg')}}">• Máy giặt LG</a>
    </div>
    @endsection