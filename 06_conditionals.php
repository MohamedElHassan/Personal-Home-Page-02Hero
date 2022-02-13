<?php

$age = 0;
$salary = 300000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND
if($age >= 20 && $salary >= 300000 ) echo 'Do Something &&';
// if OR
if($age >= 20 || $salary >= 300000 ) echo 'Do Something ||';

// Ternary if

echo $age < 18 ? 'Young' : 'Old';

// Short ternary

$newAge = $age ?: 20;

var_dump($newAge);

// Null coalescing operator

isset($name) ? $name : $name = 'Ahmed';
$name = $name ?? 'Ahmed';

// switch

$userRole = 'user';

switch($userRole){
    case 'admin':
        echo 'Hello, Admin';
        break;
    case 'editor':
        echo 'Hello, Editor';
        break;
    case 'user':
        echo 'Hello, User';
        break;
    default:
        echo 'Fuck you';
}