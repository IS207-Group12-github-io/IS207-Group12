@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Brands</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Brand name</th>
                            <th>Description</th>
                            <th>Hide/Show</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_brand_product as $key => $brand_pro)
                        <tr>
                            <th>{{$brand_pro->brand_name}}</th>
                            <th>{{$brand_pro->brand_desc}}</th>
                            <th>
                                <?php
                                if ($brand_pro->brand_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span class="fas fa-eye-slash"></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span class="fas fa-eye"></span></a>
                                <?php
                                }
                                ?>
                            </th>
                            <th>
                                <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" ui-toggle-class=""><i class="fas fa-edit text-success text-active"></i></a>
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}"><i class="fa fa-times text-danger text"></i></a>
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