<style>
    h3{
        color:#8892BF;
        font-weight:bolder;
        font-size:25px;
        padding-bottom:8px;
        border-bottom:1px solid black;
    }
</style>
<?php

// What is a variable
/* It's changing value in the Language
and used to space data hahahahahah */

// Variable types
/* 
integer
boolean
string
*/
// Declare variables

$name = 'Ahmed';
$age = 20;
$height = 1.4;
$isMarried = true;
$son = null;

// Print the variables. Explain what is concatenation
echo '<h3>Print the variables</h3>';

echo $name . '<br>';
echo $age . '<br>';
echo $height . '<br>';
echo $isMarried . '<br>';
echo $son . '<br>';


// Print types of the variables
echo '<h3>Data Types</h3>';
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($height) . '<br>';
echo gettype($isMarried) . '<br>';
echo gettype($son) . '<br>';

// Print the whole variable
echo '<h3>Print the whole variable</h3>';

var_dump($name,$age,$height,$isMarried,$son);

// Change the value of the variable

$name = false;

echo '<h3>Change the value of the variable</h3>';

// Print type of the variable

echo gettype($name). '<br>';

// Variable checking functions
echo '<h3>Variable checking functions</h3>';

echo is_string($name) . '<br>'; // Flase
echo is_string($age) . '<br>';
if(!is_string($age)){echo '0'. '<br>';}

echo is_int($height) . '<br>';
if(!is_int($height)){echo '0'. '<br>';}
echo is_bool($isMarried) . '<br>';


// Check if variable is defined
echo '<h3>Variable checking functions</h3>';

if(!isset($address)){echo '0'. '<br>';}
echo isset($name) . '<br>';


// Constants
echo '<h3>Constants</h3>';

define('PI',3.14);
const name = 'Yousef';
echo name;
echo PI;

// Using PHP built-in constants
echo '<h3>Using PHP built-in constants</h3>';

echo SORT_ASC.'<br>';
echo PHP_INT_MAX;