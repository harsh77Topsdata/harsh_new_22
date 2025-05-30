@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Offers</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Offers</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage offers</h1>
            </div>
        </div>
        <div class="container">
        <a href="add_offers" class="btn btn-primary mb-2">Add offers</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td><img src="{{url('admin/upload/Offers/'.$d->image)}}" height="30px"></td>
                        <td>{{ $d->description }}</td>
                        <td>
                            <a href="edit_contact" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection