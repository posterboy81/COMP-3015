<?php

class Course {
    private string $name;
    private bool $status;
    private string $courseID;

    public function __construct(string $name, string $courseID, bool $status,) {
        $this->name     = $name;
        $this->courseID = $courseID;
        $this->status   = $status;
    }

    public function getName() {
        return $this->name;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getID() {
        return $this->courseID;
    }

    public function setName($checkName) {
        return $this->name;
    }

    public function toString() {
        return "Course Name: " . $this->name . "; Course ID: " . $this->courseID . "; Course Status: " . $this->status;
    }
}
