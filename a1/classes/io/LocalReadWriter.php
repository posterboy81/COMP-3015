<?php
class LocalReadWriter implements IReadWritable {
    public function getCourses(array $courseList) {
        return $courseList;
    }

    public function addCourse($course) {
        return "course added";
    }

    public function delCourse($courseID) {
        return "course deleted";
    }

    public function completeCourse($courseID) {
        return "course completed";
    }
}
