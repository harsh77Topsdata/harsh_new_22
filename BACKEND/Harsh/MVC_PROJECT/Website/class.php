<?php
include_once('header.php');
?>

<html>

<body>
    <!-- Gym Class Start -->
    <div class="container gym-class mb-5" style="margin-top: 90px;">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="flaticon-six-pack"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Body Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href="" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div
                    class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Muscle Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href="" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Class Timetable</h4>
            <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">All Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">Crossfit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Powerlifting</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Crossfit</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>John Deo
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Crossfit</h5>Adam Phillips
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Power Lifting</h5>James Alien
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class="container-fluid position-relative bmi mt-5" style="margin-bottom: 90px;">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">Body Mass Index </h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">Whate is BMI?</h4>
                        <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita
                            lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat
                            diam</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white">Calculate your BMI</h1>
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="Weight" class="form-control form-control-lg bg-dark text-white"
                                        placeholder="Weight (KG)">
                                </div>
                                <div class="col form-group">
                                    <input type="text" name="Height"class="form-control form-control-lg bg-dark text-white"
                                        placeholder="Height (CM)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="Age" class="form-control form-control-lg bg-dark text-white"
                                        placeholder="Age">
                                </div>
                                <div class="col form-group">
                                    <select class="custom-select custom-select-lg bg-dark text-muted">
                                        <option>Gender</option>
                                        <option>Mal</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="button" class="btn btn-lg btn-block btn-dark border-light"
                                        value="Calculate Now">
                                </div>
                            </div>
					</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <?php
    include_once('footer.php');
    ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>