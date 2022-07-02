<?php

require "./data/user-database.php";

// find a user by searching for a specified email
// return found user 
// if no user fond, return null
function searchUserByEmail($checkEmail) {
    error_log(print_r("🔥-searchUserByEmail(): " . $checkEmail), true);
    global $db;
    foreach ($db as $array => $user) {
        if ($user['email'] === $checkEmail) {
            // error_log(print_r("🔥-user: " . $user['email']), true);
            return $user;
        }
    }
    return null;
}

// find a user by searching for a specified id
// return found user 
// if no user fond, return null
function searchUserByID($checkid) {
    global $db;
    foreach ($db as $userArray => $user) {
        if ($user['id'] === $checkid) {
            return $user;
        }
    }
    return $user;
}

// check to see if a found users password matches the database. 
function passwordCheck($checkUser, $checkPassword) {
    return $checkUser['password'] === $checkPassword;
}

//check if either field is empty
function checkForEmptyFields($checkEmail, $checkPassword) {
    error_log(print_r("💥💥💥-checkForEmptyFields() email: " . $checkEmail . " password: " . $checkPassword, true));

    if (empty($checkEmail) || empty($checkPassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// check if there is a user in the database
// if yes, check if the password matches
// if yes, create a new session with the user. 
function loginUser($email, $password) {
    error_log(print_r("🛟🛟🛟-loginUser() email: " . $email . ", password: " . $password, true));
    $user = searchUserByEmail($email);

    error_log(print_r("🛟🛟🛟-loginUser() user[email]: " . $user['email'] . ", user[password]: " . $user['password'], true));

    if (!$user) {
        header("location: ./index.php?error=invalidCredentials");
        exit();
    }

    // error_log(print_r("🍎🍎🍎-loginUser() passwordCheck email: " . $email . ", password: " . $password, true));

    if (!passwordCheck($user, $password)) {
        header("location: ./index.php?error=invalidPassword");
        exit();
    }
    createSession($user);
}

// start a session with the new user 
function createSession($checkUser) {
    error_log(print_r("🌈🌈🌈-createSession() email: " . $checkUser['email'], true));
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['userid'] = $checkUser['id'];
    header("location: ./mainpage.php");
    exit();
}

// get the current session;
function getLoggedInUser() {
    error_log(print_r("🌤🌤🌤-getLoggedInUser() session: " . $_SESSION['userId'], true));

    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION["userId"])) {
        return searchUserByID($_SESSION["userId"]);
    } else {
        return null;
    }
}
