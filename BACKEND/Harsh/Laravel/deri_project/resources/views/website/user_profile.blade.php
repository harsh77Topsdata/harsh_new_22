@extends('website.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header mb-5">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mt-4">User Profile</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="{{ url('/') }}">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">User Profile</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- User Profile Start -->
<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
            <h2 class=" text-primary mb-4">Welcome to Your Profile</h2>
            <p class="text-muted">Here you can view and update your personal information.</p>
        </div>
    </div>

    @if(isset($data))
    <div class="row g-5">
        <!-- Profile Image -->
        <div class="col-lg-4">
            <div class="card shadow-sm border-0 rounded">
                <img src="{{ url('website/upload/users/' . $data->image) }}" class="card-img-top rounded-top"
                    alt="User Image" style="height: 350px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">{{ $data->name }}</h5>
                    <small class="text-muted">User ID: {{ $data->id }}</small>
                </div>
                <div class="card-body text-center">
                    <a href="{{url('/order_view/'.$data->id)}}" class="btn btn-outline-primary btn-sm">View Order</a>
                </div>
            </div>
        </div>

        <!-- Profile Info -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 p-4 rounded">
                <h4 class="mb-4 text-primary">Profile Information</h4>

                <div class="mb-3">
                    <label class="form-label fw-bold">Name:</label>
                    <p class="form-control">{{ $data->name }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Gender:</label>
                    <p class="form-control">{{ $data->gen }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Languages:</label>
                    <p class="form-control">{{ $data->lang }}</p>
                </div>

                <a href="{{ url('/user_profile/' . $data->id) }}" class="btn btn-outline-primary mt-3">
                    <i class="fa fa-edit me-2"></i>Edit Profile
                </a>
            </div>
        </div>
    </div>
    @else
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="alert alert-danger text-center">
                <strong>Error:</strong> User not found.
            </div>
        </div>
    </div>
    @endif
</div>
<!-- User Profile End -->
@endsection
