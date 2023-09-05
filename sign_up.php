<?php
    session_start();

        include("connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_POST['First_name'];
            $email = $_POST['inputEmail'];
            $adress =$_POST['inputAddress'];
            $zip_code = $_POST['inputZip'];
            $user_name = $_POST['inputUserName'];
            $password = $_POST['inputPassword'];
            $password_again = $_POST['inputPasswordAgain'];

            if(!empty($name) && !empty($emial) && !empty($adress) && !empty($zip_code) && !empty($user_name) && !empty($password) && $password == $password_again)
            {   
                $user_id = random_num(10);
                $query = "insert into users (user_id, name, email, adress, zip_code, user_name, password) 
                            values ('$user_id', '$name', $email, '$adress', '$zip_code', '$user_name', '$password')";
            
                mysqli_query($con, $query);

                header("Location: login.php");
                die;
            
            }
            else{
                echo "Please enter some valid oinformation...";
            }
        }


?>



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
    <title>Registration</title>
</head>
<body>
    <nav class="p-2 mb-2 bg-black text-white bg-opacity-75 sticky-top">
        <div class="d-flex flex-row mb-3 justify-content-between align-items-center">
            <div class="p-2 col-md-2">
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
                    <div id="head">Couple of things we need to know about you for the registration...</div>
                </div>
            </div>
            <div class="col-6">
    
            </div>

        </div>
    </div>
    <div class="bg-dark bg-gradient" style="padding-bottom: 50px;">
        <div id="urlap" class="p-3 focus-ring focus-ring-warning py-1 px-2 bs-dark-text-emphasis border-dark-subtle rounded-3 shadow">
            <div class="container">
                <form method="post" action="sign_up_process.php" novalidate>
                    <div class="row g-3">
                        <div class="col">
                            <label for="First_name" class="form-label shadow-lg">First Name</label>
                            <input type="text" id="First_name" name="First_name" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="Last_name" class="form-label shadow-lg">Last Name</label>
                            <input type="text" id="Last_name" name="Last_name" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col-md-6 shadow-lg">
                        <label for="inputEmail" class="form-label shadow-lg">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label shadow-lg">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Your Address">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label shadow-lg">City</label>
                        <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Your City">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label shadow-lg">Post Code</label>
                        <input type="text" class="form-control" id="inputZip" name="inputZip" placeholder="Post Code">
                    </div>
                    <div class="col-md-4">
                        <label for="inputUserName" class="form-label shadow-lg">User Name</label>
                        <input type="text" id="inputUserName" class="form-control" name="inputUserName" placeholder="User Name">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword" class="form-label shadow-lg">Password</label>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPasswordAgain" class="form-label shadow-lg">Password Again</label>
                        <input type="password" class="form-control" id="inputPasswordAgain" name="inputPasswordAgain" placeholder="Password Again">
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" id="submit" value="Signup" class="btn btn-primary">Submit!</button>
                </div>
            </form>
        </div>
    
        <div id="target"></div>
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