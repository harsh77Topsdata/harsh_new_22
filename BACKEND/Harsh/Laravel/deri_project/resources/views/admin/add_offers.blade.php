@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Offers</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">offers</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Add Offers</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
            <div class="contact-form bg-light rounded p-5">
            <a href="manage_offers" class="btn btn-primary text-left mb-2">Manage Offers</a>
                    <div id="success"></div>
                    <form name="sentMessage" action="{{url('/add_offers')}}" id="Form" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12 control-group p-2">
                            <input type="file" class="form-control p-3" name="image" id="image"></input>
                        </div>
                        <br>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="4" name="description" id="description" placeholder="description"></textarea>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection