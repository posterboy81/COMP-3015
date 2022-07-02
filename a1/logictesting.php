<?php

include('./Interfaces/IReadWritable.php');
include('./classes/CourseManager.php');
include('./classes/Course.php');
include('./classes/io/RemoteReadWriter.php');
include('./classes/io/LocalReadWriter.php');


// new course manager
$StudentMatthew = new CourseManager('Matthew', new LocalReadWriter());

// two new courss 
$bcit3015 = new Course("COMP 3015", "comp3015", true);
$bcit3012 = new Course("COMP 3012", "comp3012", true);

// add the coures to the manager
$StudentMatthew->addCourse($bcit3015);
$StudentMatthew->addCourse($bcit3012);

// get the students name
echo "Student Name Is: " . $StudentMatthew->getName() . "\n";

//print the students course info 
echo "Student Course Info: \n";
foreach ($StudentMatthew->getCourses() as $c) {
    echo $c->toString() . "\n";
}
