<?php

class Student
{
    public $name;
    public $age;
    public $course;

    public function displayInfo()
    {
        return "Name: {$this->name}, Age: {$this->age}, Course: {$this->course}";
    }
}

$student = new Student();

$student->name = "Ayuk";
$student->age = 21;
$student->course = "Computer Engineering";

echo $student->displayInfo();