<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="webshop.css">
    <title>Main</title>
</head>
<body>
    <nav class="p-2 mb-2 bg-black text-white bg-opacity-75 sticky-top">
        <div class="d-flex flex-row mb-3 justify-content-between align-items-center">
            <div class=" col-md-2">
                <a class="navbar-brand" href="webshop_main.php">
                    <h2>Webshop</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="p-2 d-flex justify-content-between col-md-6">
                <div class="p-1">
                    <a class="nav-link active" aria-current="page" href="webshop_main.html">Home</a>
                </div>
                <div class="p-1">
                    <a class="nav-link" href="#">For Sale</a>
                </div>
                <div class="p-1">
                    <a class="nav-link" href="#">About us</a>
                </div>
            </div>
            <div class="p-2 col-md-2">
                <div class="dropdown">
                    <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sign in / Sign up
                    </a>
                  
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                        <li><a class="dropdown-item" href="sign_up.php">Sign up</a></li>
                    </ul>
                </div>
            </div>
          </div>
    </nav>
    <div class="header container-lg">
        <div class="d-flex row">
            <div class="col-md-4 col-6 d-flex position-relative">
                <div class="position-absolute start-50 top-50 text-white fs-2" style="height: 300px; width: 300px; margin-top: 50%; text-align:justify;">
                    The best place where you could go for to spend only a bit from your pocket . . .
                </div>
            </div>
            <div class="col-6">
    
            </div>

        </div>
    </div>
    <div class="bg-dark bg-gradient" style="padding-bottom: 50px;">
        <div class="container text-center" style="padding: 50px;">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="card" style="width: 25rem; box-shadow: 10px 10px 15px black">
                        <img src="alapanyagok.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Best Prices...</h5>
                            <p class="card-text">If you selling the best products from the best supliers you dont even have to worry about the advertisment...</p>
                            <a href="webshop_login.html" class="btn btn-primary">Login!</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4"></div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-6 col-md-4"></div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="card" style="width: 25rem; box-shadow: 10px 10px 15px black">
                        <img src="grill tal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Even better costumer service...</h5>
                            <p class="card-text">Now you have the right ingridients finaly from us, but you are still short of ideas how to use them...</p>
                            <a href="webshop_login.html" class="btn btn-primary">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center ">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="card" style="width: 25rem; box-shadow: 10px 10px 15px black">
                        <img src="termelotol.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">What are you waiting for</h5>
                            <p class="card-text">We are always been working with the best, why you would be the exception...</p>
                            <a href="webshop_login.html" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4"></div>
            </div>
        </div>    
    </div>
    <footer class="footer">
        <div class="foot-container">
            <div class="row">
                <div class="footer-col">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">For Sale!!!!</a></li>
                        <li><a href="#">About us...</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact us...</h4>
                    <ul>
                        <li>Contact us any time at</li>
                        <li><a href="mailto:vidacs.akos@gmail.com">bestsuplier@fakebutoncecouldbereal.com</a></li>
                        <li>*All images from</li>
                        <li><a href="unsplash.com">unsplash.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hours</h4>
                    <ul>
                        <li>Monday-Sunday</li>
                        <li>0-24</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="webshop.js"></script>
</body>
</html>