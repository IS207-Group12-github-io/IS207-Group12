@extends('layout')
@section('content')
<div class="shopping-cart">
        <div class="change-item">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="{{asset('public/frontend/image/product4.jfif')}}" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply"><a href="">x</a></span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="{{asset('public/frontend/image/product3.jpg')}}" alt="">
            <div class="content">
                <h3>organic food</h3>
                <span class="quantity">1</span>
                <span class="multiply"><a href="">x</a></span>
                <span class="price">$18.99</span>
            </div>
        </div>
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="{{URL::to('/cart')}}" class="btn">checkout cart</a>
    </div>
@endsection