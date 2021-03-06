<?php

interface IReadWritable {

    public function getCourses(array $courseList);

    public function addCourse(Course $course);

    public function delCourse(string $courseID);

    public function completeCourse(string $courseID);
}
