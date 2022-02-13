<?php
require_once 'Person.php';
require_once 'Student.php';
// // What is class and instance

// // Create Person class in Person.php

// // Create instance of Person
// $p = new Person('Ahmed','El Hassan');
// $p->setAge(17);

// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo '<hr>';
// echo $p->getAge();
// echo '<hr>';
// $p2 = new Person('Mohammed','El Hassan'); 

// $p2->setAge(20);
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// echo '<hr>';
// echo $p2->getAge();
// echo '<hr>';
// echo Person::getCounter();

// // Using setter and getter

$student = new Student('Mohammed','El Hassan',1);

echo '<pre>';
var_dump($student);
echo '</pre>';