<?php
    if (empty($_POST["name"])) {
        die("name required!");
    }
    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("valid email is required...");
    }
    if (strlen($_POST["password"]) < 8) {
        die("Password must be at least 8 characters");
    }
    if (!preg_match("/[a-z]/i", $_POST["password"])) {
        die("Password must contain at least one letter");
    }

    if (!preg_match("/[0-9]/i", $_POST["password"])) {
        die("Password must contain at least one number");
    }
    if ($_POST['inputPassword'] !== $_POST['inputPasswordAgain']){
        die("Passwords must be the same!");
    }

    $password_hash=password_hash($_POST["password"], PASSWORD_DEFAULT);
    var_dump($password_hash);
    print_r($_POST);