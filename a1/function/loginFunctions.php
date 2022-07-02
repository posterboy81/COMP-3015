<?php

require("../data/user-database.php");

// log in a user using the given credentials
function logInUser($checkEmail, $checkPassword) {
    $newUser = getUserByEmail($checkEmail);
    if (!$newUser) {
        header("location: /index.php?error=invalidEmail");
        exit();
    }
    if (!checkUserPassword($newUser, $checkPassword)) {
        header("location: /index.php?error=invlidPassword");
        exit();
    }

    createSessionAndRedirect($newUser);
}

// check that both emaild and password are present
function checkForEmptyFields($checkEmail, $checkPassword) {
    if (empty($checkEmail) || empty($checkPassword)) {
        header("location: /index.php?error=errormsg");
        exit();
    }
}

//search for a user via supplied email 
// if none found, return null
function getUserByEmail($checkEmail) {
    global $db;
    foreach ($db as $array => $user) {
        if ($user['email'] === $checkEmail) {
            return $user;
        }
    }
    return null;
}

// search user by ID
// if none found, return null
function getUserByID($checkID) {
    global $db;
    foreach ($db as $array => $user) {
        if ($user['userId'] === $checkID) {
            return $user;
        }
    }
    return null;
}

// check user password against database
function checkUserPassword($checkUser, $checkPassword) {
    $match = $checkUser['password'] === $checkPassword;
    return $match;
}

// create a new session with the specified user 
function createSessionAndRedirect($checkUser) {
    if (!isset($_SESSION)) {
        error_log("💥💥💥💥💥 - starting session");
        session_start();
    }
    $_SESSION["userId"] = $checkUser["id"];
    $_SESSION['email'] = $checkUser['email'];
    error_log("💥💥💥💥💥 - " . $_SESSION['userId'] . ", " . $_SESSION['email']);
    header("location: ../views/mainView.php");
    exit();
}

function getActiveUser() {
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION["email"])) {
        return getUserByEmail($_SESSION["email"]);
    } else {
        return null;
    }
}
