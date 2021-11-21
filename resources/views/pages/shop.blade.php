@extends('layout')
@section('content')
<div class="heading">
    <h1>our shop</h1>
    <p> <a href="home.html">home >></a> shop </p>
</div>
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

    <h1 class="title"> All <span>products</span> <a href="#">view all >></a> </h1>
    <div class="box-container">
    @foreach($all_product as $key => $product)
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
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