@extends('website.layout.main');

@section('main_contant');

   <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            <div class="container">
            <a href="/add_items" class="btn btn-primary float-right mb-2">Add items</a>
            <table class="table table-striped">
            <thead>
                    <tr>
                        <th>id</th>
                        <th>item_name</th>
                        <th>item_price</th>
                        <th>item_image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->item_name}}</td>
                        <td>{{$d->item_price}}</td>
                        <td><img src="{{url('website/upload/product/'.$d->item_image)}}" width="50px"></td>
                        <td>
                            <a href="{{ url('/edit_items/'.$d->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('/manage_items/'.$d->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

            </div>
        </div>
    </div>


@endsection