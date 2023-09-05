<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webshop";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname))
{
    die("Its failed to connect!");
}