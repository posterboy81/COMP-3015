<?php
require("../classes/CourseManager.php");
require("../classes/Course.php");

$courseName = $_POST['courseName'];

function addCourseToList($courseName) {
    global $c;
    $temp = new Course($courseName, str_replace(" ", "-", $courseName), true);
    $c->addCourse($temp);
}
