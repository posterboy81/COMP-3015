<?php

include('./Interfaces/IReadWritable.php');
include('./classes/CourseManager.php');
include('./classes/Course.php');
include('./classes/io/RemoteReadWriter.php');
include('./classes/io/LocalReadWriter.php');

$courseOne = new CourseManager('Matthew', new LocalReadWriter());

echo "the name is: " . $courseOne->getName();
