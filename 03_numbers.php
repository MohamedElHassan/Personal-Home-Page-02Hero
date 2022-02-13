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
// echo text . '<br>';


// Declaring numbers

$a = 5;
$b = 4;
$c = 1.5;

// Arithmetic operations
echo '<h3>Arithmetic operations</h3>';

echo $a + $b + $c . '<br>';
echo $a % $b  . '<br>';

// Assignment with math operators
echo '<h3>Assignment with math operators</h3>';

$a += $b;
echo $a; // 9

// Increment operator
echo '<h3>Increment operator</h3>';

echo $a++ .'<br>';
echo ++$a;

// Decrement operator
echo '<h3>Increment operator</h3>';

echo $a-- . '<br>';
echo --$a . '<br>';
echo --$a;

// Number checking functions
echo '<h3>Number checking functions</h3>';

echo is_float(1.5); // true
echo is_double(1.5); // true
echo is_int(3); // true
echo is_numeric('4545'); // true

// Conversion
echo '<h3>Conversion</h3>';

$strNumber = 12.34;
$number = doubleval($strNumber) ;
var_dump($number);



// Number functions
echo '<h3>Number functions</h3>';

echo min(3,4,6,7,565,7); echo '<br>';
echo max(3,4,6,7,565,7); echo '<br>';
echo pow(2,4); echo '<br>';
echo sqrt(16); echo '<br>';

// Formatting numbers
echo '<h3>Formatting numbers</h3>';

$num = 123456789.123456;
echo number_format($num,2,'.',',');


// https://www.php.net/manual/en/ref.math.php
