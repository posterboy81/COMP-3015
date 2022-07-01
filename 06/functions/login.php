<?php
require_once "./loginmethods.php";

// grab the emil and password from the POST
$email = $_POST["email"];
$password = $_POST["password"];

// check if either login field is empty
if (checkForEmptyFields($email, $password)) {
    header("location: ../index.php?error=emptyFields");
    exit();
}

loginUser($email, $password);

require "./mainpage.php";
