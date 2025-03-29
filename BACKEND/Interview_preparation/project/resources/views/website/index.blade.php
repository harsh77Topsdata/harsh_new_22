@extends('website.layout.main')

@section('main_contant')

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            <a href="manage_product" class="btn btn-primary text-left mb-3">Manage Product</a>
            <form method="post" action="{{url('/add_product')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" name ="pro_name" id="pro_name" placeholder="Enter product name">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" name ="pro_price" id="pro_price" placeholder="Enter product price">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="file" class="form-control p-2" name="image" id="image"></input>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-2 px-3" type="submit" id="sendMessageButton">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection