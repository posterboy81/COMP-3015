<?php

include('./Interfaces/IReadWritable.php');
include('./classes/CourseManager.php');
include('./classes/Course.php');
include('./classes/io/RemoteReadWriter.php');
include('./classes/io/LocalReadWriter.php');

$StudentMatthew = new CourseManager('Matthew', new LocalReadWriter());

$bcit3015 = new Course("COMP 3015", true, "comp3015");
$bcit3012 = new Course("COMP 3012", true, "comp3012");

echo "Course Info: " . $bcit3015->toString() . "\n";

$StudentMatthew->addCourse($bcit3015);
$StudentMatthew->addCourse($bcit3012);

echo "Student Name Is: " . $StudentMatthew->getName() . "\n";

echo "Student Course Info: \n";

foreach ($StudentMatthew->getCourses() as $c) {
    echo $c->toString() . "\n";
}
