<?php

require_once("loginFunctions.php");

$email = $_POST['email'];
$password = $_POST['password'];

checkForEmptyFields($email, $password);

loginUser($email, $password);

