<!-- Matthew Simpson / COMP 3015 / July 2022-->

<?php
if (!isset($_SESSION)) {
    session_start();
}

$error = "";
if (isset($_GET["error"]) && $_GET["error"] == "invalidCredentials") {
    $error = '<span class="errormsg">Invalid Credentials </span>';
} else if (isset($_GET["error"])  && $_GET["error"] == "emptyFields") {
    $error = '<span class="errormsg">Email or Password cannot be blank</span>';
} else if (isset($_GET["error"])  && $_GET["error"] == "invalidPassword") {
    $error = '<span class="errormsg">Password incorrect</span>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/cm-main-style.css">
    <title>COMP 3015 - Course Manager</title>
</head>

<body>