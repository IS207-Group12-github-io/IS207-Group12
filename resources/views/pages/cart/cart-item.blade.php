@extends('layout')
@section('content')
@if($newCart != null)
<div class="shopping-cart">
        <div class="change-item">
        @foreach($newCart->products as $item)
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="{{asset('public/frontend/image/product4.jfif')}}" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">{{$newCart->totalQuantity}}</span>
                <span class="multiply"><a href="">x</a></span>
                <span class="price">{{$newCart->totalPrice}}</span>
            </div>
        </div>
        @endforeach
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="{{URL::to('/cart')}}" class="btn">checkout cart</a>
    </div>
@endif
@endsection