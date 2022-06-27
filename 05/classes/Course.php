<?php

class Course {
    private string $name;
    private bool $status;
    private string $courseID;

    public function __construct(string $name, bool $status, string $courseID) {
        $this->name     = $name;
        $this->status   = $status;
        $this->courseID = $courseID;
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
        return "Course Name: " . $this->name . "; Course Status: " . $this->status . "; Course ID: " . $this->courseID;
    }
}
