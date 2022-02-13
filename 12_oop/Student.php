<?php 
require_once 'Student.php';
class Student extends Person{
    public int $studentId;

    public function __construct($name,$surname,$studentId)
    {
        
        parent::__construct($name,$surname);
        // $this->$age = 222;
        $this->$studentId = $studentId;
    }
}