@extends('layout')
@section('content')
<div class="heading">
    <h1>our shop</h1>
    <p> <a href="">home >></a> product detail </p>
</div>

<section class="products-detail">
@foreach($product_details as $key => $value)
    <h1 class="title"> our <span>products detail</span> <a href="#">view all >></a> </h1>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="">
            </div>
            <div class="col-4">
                <p>Home / {{$value->category_name}} </p>
                <h1>{{$value->product_name}}</h1>
                <h1>{{$value->product_price}} $</h1>
                <h1>Brand: {{$value->brand_name}}</h1>
                <input type="number" value="1" min="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>{{$value->product_content}} <i class="fa fa-indent"></i></h3>
                <p>{{$value->product_desc}}</p>
            </div>
        </div>
    </div>

@endforeach
</section>
@endsection