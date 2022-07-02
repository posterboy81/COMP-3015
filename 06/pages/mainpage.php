<?php

require_once "../functions/loginmethods.php";

$user = getLoggedInUser();
// Restricted route
if (!$user) {
    header("location: ../functions/login.php");
    exit();
}

include "../pages/header.php";
include "../pages/menu.php"; ?>

<main>
    <div class="welcome">
        <h2>Welcome to your course manager! <?= $user['email'] ?></h2>
    </div>


    <div class="coursesearch">
    </div>

    <div class="courseList">


    </div>
</main>


<?php include "../pages/footer.php" ?>