<?php
class RemoteReadWriter implements IReadWritable {
    public function getCourses(array $courseList) {
        return "remote courses";
    }

    public function addCourse($course) {
        return "remote course added";
    }

    public function delCourse($courseID) {
        return "remote course deleted";
    }

    public function completeCourse($courseID) {
        return "remote course completed";
    }
}
