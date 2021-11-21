@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Products</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product category name</th>
                            <th>Description</th>
                            <th>Hide/Show</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_category_product as $key => $cate_pro)
                        <tr>
                            <th>{{$cate_pro->category_name}}</th>
                            <th>{{$cate_pro->category_desc}}</th>
                            <th>
                                <?php
                                if ($cate_pro->category_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fas fa-eye-slash"></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fas fa-eye"></span></a>
                                <?php
                                }
                                ?>
                            </th>
                            <th>
                                <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" ui-toggle-class=""><i class="fas fa-edit text-success text-active"></i></a>
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}"><i class="fa fa-times text-danger text"></i></a>
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