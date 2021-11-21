@extends('admin_layout')
@section('admin_content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ADD CATEGORY PRODUCT</h1>
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
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter your Category Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label> <br>
                            <textarea name="category_product_desc" id="" cols="30" rows="10" placeholder="Enter your description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Display</label>
                            <select name="category_product_status" id="">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">ADD</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

</div>
@endsection