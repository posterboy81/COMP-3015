<?php

class CourseManager {
    private string $username;
    private array $courses = [];
    private IReadWritable $persist;

    // constructor 
    public function __construct(string $username, IReadWritable $persist) {
        $this->username = $username;
        $this->persist = $persist;
    }

    public function getName() {
        return $this->username;
    }

    public function getCourses() {
        $this->persist->getCourses();
    }

    public function addCourse(Course $course) {
        $this->persist->addCourse($course);
    }

    public function delCourse(string $courseID) {
        $this->persist->delCourse($courseID);
    }

    public function completeCourse(string $courseID) {
        $this->persist->completeCourse($courseID);
    }
}
