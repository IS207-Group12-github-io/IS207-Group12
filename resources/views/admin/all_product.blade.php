@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Products</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php

           /*  use Illuminate\Support\Facades\Session;

            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . "</span>";
                Session::put('message', null);
            } */
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Product price</th>
                            <th>Product image</th>
                            <th>Product category</th>
                            <th>Brand</th>
                            <th>Display</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_product as $key => $pro)
                        <tr>
                            <th>{{$pro->product_name}}</th>
                            <th>{{$pro->product_price}}</th>
                            <th><img src="public/uploads/product/{{$pro->product_image}}" height="100" width="100"></th>
                            <th>{{$pro->category_name}}</th>
                            <th>{{$pro->brand_name}}</th>
                            <th>
                                <?php
                                if ($pro->product_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fas fa-eye-slash"></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fas fa-eye"></span></a>
                                <?php
                                }
                                ?>
                            </th>
                            <th>
                                <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" ui-toggle-class=""><i class="fas fa-edit text-success text-active"></i></a>
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}"><i class="fa fa-times text-danger text"></i></a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection