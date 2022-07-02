<?php

require "./login.php";

$user = getLoggedInUser();
// Restricted route
if (!$user) {
    header("location: ./login.php");
    exit();
}

include "./header.php";
include "./menu.php"; ?>

<main>
    <div class="welcome">
        <h2>Welcome to your course manager! <?= $user['email'] ?></h2>
    </div>


    <div class="coursesearch">
    </div>

    <div class="courseList">


    </div>
</main>


<?php include ".footer.php" ?>