@extends('admin_layout')
@section('admin_content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ADD PRODUCT</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-product')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter your Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Upload image</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product price</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter your Product Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label> <br>
                            <textarea name="product_desc" id="" cols="30" rows="5" placeholder="Enter your description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label> <br>
                            <textarea name="product_content" id="" cols="30" rows="5" placeholder="Enter your content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category Product</label>
                            <select name="product_cate" id="">
                                @foreach($cate_product as $key => $cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Brand</label>
                            <select name="product_brand" id="">
                                @foreach($brand_product as $key => $brand)
                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Display</label>
                            <select name="product_status" id="">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">ADD PRODUCT</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

</div>
@endsection
