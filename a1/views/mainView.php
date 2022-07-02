<?php

require_once "../function/loginFunctions.php";
require("../views/page-top.php");
require("../views/page-menu.php");
require("../classes/CourseManager.php");
require("../Interfaces/IReadWritable.php");
require("../classes/io/LocalReadWriter.php");

$user = getActiveUser();
$c = new CourseManager($_SESSION['email'], new LocalReadWriter());

$_SESSION['cm'] = $c;

?>

<main>
    <h2>Welcome to your course manager, <?= $_SESSION['email'] ?></h2>
    <div class="courseSearch">
        <form method="get" action="">
            <input type="text" id="courseName" name="courseName" placeholder="Course Name">
            <button type="submit">Add Course</button>
        </form>
    </div>
    <div class="courseList">
        <?php
        foreach ($c as $array => $course) {
            echo $course;
        }
        ?>
    </div>
</main>

<footer></footer>

</body>

</html>