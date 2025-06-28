

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="main col-sm-10 col-md-6 col-lg-5 bg-light p-4 rounded shadow">
            <h3>Signup here</h3>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your Name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Languages Known</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="langEnglish" value="English">
                        <label class="form-check-label" for="langEnglish">English</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="langHindi" value="Hindi">
                        <label class="form-check-label" for="langHindi">Hindi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="langGuj" value="Guj">
                        <label class="form-check-label" for="langGuj">Gujarati</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload your Photo</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="text-center">
                    <button name="submit" class="btn btn-primary px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <footer class="bg-dark text-white pt-4 pb-3">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Column 1 -->
                <div class="col-md-4 mb-3">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et euismod ligula.</p>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <hr class="border-light" />

            <div class="text-center">
                <p class="mb-0">© 2025 YourCompany. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>