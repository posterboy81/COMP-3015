<!DOCTYPE html>
<html>

<head>
    <title>Week 3 Lab Form Data Processed</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <h1>Week 3 Lab - Processed Data</h1>


    <?php

    // some consts
    // min string length
    const MIN_LENGTH = 2;
    // password must match
    const DEF_PASS      = "bcit";
    // student number regex pattern
    const SID_PATTERN   = "/[Aa]{1}[0][0-9]{7}/";

    // assigne variables & normalize with trim()
    $username       = trim($_POST['username']);
    $studentnum     = trim($_POST['studentnum']);
    $password       = trim($_POST['password']);
    $gender         = trim($_POST['gender']);

    // check username 
    if (strlen($username) < 1) {
        $error = array('errormsg' => 'Username is required!');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    } else if (strlen($username) < MIN_LENGTH) {
        $error = array('errormsg' => 'Username is too short!');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    };

    // check student number 
    if (strlen($studentnum) < 1) {
        $error = array('errormsg' => 'Student Number is required!');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    } else if (!preg_match(SID_PATTERN, $studentnum)) {
        $error = array('errormsg' => 'Student number formated incorectly');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    };

    // check password
    if ($password !== DEF_PASS) {
        $error = array('errormsg' => 'Password incorrect!');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    };

    // check gender 
    if (!$gender) {
        $error = array('errormsg' => 'Gender is requried!');
        $query = http_build_query($error);
        header('location: 03form.php' . "?" . $query);
    }

    // check languages
    if(isset($_POST['languages'])){
        $languages      = $_POST['languages'];
    }
    if(!isset($_POST['languages'])){
        $languages[0] = "none";
    }

    // determine salutation 
    $salutation = '';
    switch ($gender) {
        case "male":
            $salutation = "Mr";
            break;
        case "female":
            $salutation = "Ms";
            break;
        case "nonbinary":
            $salutation ="there";
            break;
    }

    // determine languages output
    $langout = '';
    if ($languages[0] === "none") {
        $langout = "You aren't studying any languages?  Weird!";
    }
    if (sizeof($languages) > 2) {
        $langout = "You are multilingual!";
    }
    if (sizeof($languages) > 5) {
        $langout = "Impressive. You have been studying quite a few computing languages!";
    }

    echo "<p>Howdy $salutation $username! <br> $langout</p>";
    echo "<ul>";

    foreach($languages as $lang){
        echo "<li>$lang</li>";
    }

    echo "</ul>";



    ?>

</body>

</html>