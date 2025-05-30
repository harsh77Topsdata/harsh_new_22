@extends('website.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header mb-5">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mt-4">Order Details</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="{{ url('/') }}">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Order</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Order Details Start -->
<div class="container py-5">
    @if(isset($orders))
    <div class="row justify-content-center">
        <div class="col-lg-10 glass-card p-5">
            

         

            <!-- Order Items -->
            <h5 class="mb-3">Items Ordered</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index)
                    <tr>
                        <td>{{ $index->id }}</td>
                        <td>{{ $index->pro_name }}</td>
                        <td>{{ $index->quantity }}</td>
                        <td>₹{{ number_format($index->pro_price, 2) }}</td>
                        <td>₹{{ number_format($index->pro_price * $index->quantity, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

           

            <div class="text-center mt-4">
                <a href="{{ url('/user_profile') }}" class="btn btn-outline-primary">Back to Profile</a>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-danger text-center">
        Order not found.
    </div>
    @endif
</div>
<!-- Order Details End -->
@endsection
