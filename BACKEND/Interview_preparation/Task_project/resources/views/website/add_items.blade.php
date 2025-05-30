@extends('website.layout.main');

@section('main_contant');

    <div class="container mt-5">
        <div class="row">
            
            <div class="col-sm-12">
                <a href="/manage_items" class="btn btn-primary float-right mb-2">Mange items</a>
            <form method="post" action="{{url('/add_items')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" value="" name ="item_name" id="item_name" placeholder="Enter product name">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" value="" name ="item_price" id="item_price" placeholder="Enter product price">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="file" class="form-control p-2" value="" name="item_image" id="item_image"></input>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-2 px-3" type="submit" id="sendMessageButton">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection