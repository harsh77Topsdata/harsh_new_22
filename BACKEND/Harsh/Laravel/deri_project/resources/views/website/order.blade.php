@extends('website.layout.main')

@section('main_contant')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Your Order</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Your Order</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container mt-4">
        <div class="row contact-form bg-light rounded p-5">
            <div class="col-md-6">
                <img src="{{url('admin/upload/product/' . $d->pro_image)}}" class="img-fluid rounded shadow"
                    alt="{{ $d->pro_title }}" height="100%" width="70%">
            </div>
            <div class="col-md-6">
                <h1 class="mb-2">{{$d->product_title}}</h1>
                <h3 class="mb-2 border-bottom">{{$d->pro_weight}}</h3>
                <h3 class="mb-2">₹ {{$d->pro_price}}</h3>
                <p class="mt-5">{{$d->pro_descp}}</p>
                <hr class="md-3">
                <form action="{{url('/order/'. $d->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="pro_id" id="pro_id" value="{{$d->id}}">
                   
                    <div class="form-group mb-2">
                        <label for="qty" class="form-label">Enter Qty You Want</label>
                        <input type="number" name="qty" id="qty" class="form-control" min="1"
                            oninput="handleChange(this.value)">
                        @error('qty')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="hidden" name="price" id="price" value="{{$d->pro_price}}">

                    <div class="form-group mb-2">
                        <label for="total" class="form-label">Total Amount</label>
                        <input type="text" name="total" id="total" class="form-control" readonly>
                    </div>

                    <div class="mt-5">
                        <button class="btn btn-block btn-outline-danger" type="submit">Buy Now</button>
                    </div>
                </form>

                <script>
                    const price = parseFloat(document.getElementById('price').value);
                    document.getElementById("qty").addEventListener("input", function () {
                        const qty = parseInt(this.value.trim());
                        if (!isNaN(qty) && qty > 0) {
                            const total = price * qty;
                            document.getElementById("total").value = "₹" + total;
                        } else {
                            document.getElementById("total").value = "";
                        }
                    });
                </script>
            </div>
        </div>
    </div>
@endsection