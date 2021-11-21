@extends('layout')
@section('content')
<div class="heading">
    <h1>our shop</h1>
    <p> <a href="">home >></a> checkout </p>
</div>
<section class="checkout">
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>quantity</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('public/frontend/image/product1.jfif')}}" alt="">
                </div>
                <div>
                    <p>Product Name</p>
                    <small>Price : 50$</small>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
            <td><a href=""><i class="fas fa-trash"></i> </a></td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('public/frontend/image/product3.jpg')}}" alt="">
                </div>
                <div>
                    <p>Product Name</p>
                    <small>Price : 50$</small>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
            <td><a href=""><i class="fas fa-trash"></i> </a></td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('public/frontend/image/product4.jfif')}}" alt="">
                </div>
                <div>
                    <p>Product Name</p>
                    <small>Price : 50$</small>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>50.00</td>
            <td><a href=""><i class="fas fa-trash"></i> </a></td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtoal</td>
                <td>$ 200.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$ 200.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$ 200.00</td>
            </tr>
        </table>
    </div>
</div>
</section>
@endsection