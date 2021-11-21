@extends('layout')
@section('content')
<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>Fashion Men</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="{{asset('public/frontend/image/home-1.jpg')}}" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Fashion Women</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="{{asset('public/frontend/image/home-2.jpg')}}" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Accessory</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="{{asset('public/frontend/image/home-3.jpg')}}" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>
<section class="banner-container">

    <div class="banner">
        <img src="{{asset('public/frontend/image/banner1.jpg')}}" alt="">
        <div class="content">
            <span>Fashion Men</span>
            <h3>upto 50% off</h3>
            <a href="{{URL::to('/shop')}}" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="{{asset('public/frontend/image/banner2.jpg')}}" alt="">
        <div class="content">
            <span>FAshion Women</span>
            <h3>upto 50% off</h3>
            <a href="{{URL::to('/shop')}}" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="{{asset('public/frontend/image/banner3.jpg')}}" alt="">
        <div class="content">
            <span>Accessory</span>
            <h3>upto 50% off</h3>
            <a href="{{URL::to('/shop')}}" class="btn">shop now</a>
        </div>
    </div>
</section>
<section class="category">

    <h1 class="title"> our <span>category</span> <a href="#">view all >></a> </h1>
    <div class="box-container">
    @foreach($category as $key => $cate)
        <a href="#" class="box">
            <h3>{{$cate->category_name}}</h3>
        </a>
    @endforeach
    </div>
</section>
<section class="category">

    <h1 class="title"> our <span>Brand</span> <a href="#">view all >></a> </h1>
    <div class="box-container">
    @foreach($brand as $key => $brand)
        <a href="#" class="box">
            <h3>{{$brand->brand_name}}</h3>
        </a>
    @endforeach
    </div>
</section>
<section class="products">

    <h1 class="title"> Product <span>featured</span> <a href="#">view all >></a> </h1>
    <div class="box-container">
    @foreach($all_product as $key => $product)
        <div class="box">
            <div class="icons">
                <a onclick="AddCart({{$product->product_id}})" href="javascript:" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="{{URL::to('product-detail/'.$product->product_id)}}" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
            </div>
            <div class="content">
                <h3>{{$product->product_name}}</h3>
                <div class="price">{{$product->product_price}}</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>

@endsection