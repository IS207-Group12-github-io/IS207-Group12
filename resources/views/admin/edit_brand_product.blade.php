@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
                @foreach($edit_brand_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Name</label>
                            <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter your brand Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label> <br>
                            <textarea name="brand_product_desc" id="" cols="30" rows="10" value="{{$edit_value->brand_desc}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hiển thị</label>
                            <select name="brand_product_status" id="">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Update Brand</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>

</div>
@endsection