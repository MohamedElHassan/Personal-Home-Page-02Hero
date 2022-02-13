<?php

// Function which prints "Hello I am Zura"

// function name(){
//     echo 'Hello I am Mohammed El Hassan';
// }
// name();
// Function with argument

function yourName($name){
    return "Hello, Your name Is $name. I'm a magician, Right!😉";
}
yourName('Mohammed');

// Create sum of two functions
// easy
// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//     $result = 0;
//     // for($i=0; $i < count($nums) ; $i++){
//     //     $result += $nums[$i];
//     // }
    
//     foreach($nums as $n){
//         $result += $n;
//     }
//     return $result;
// }
// echo sum(5,5,5,5);

// Arrow functions


function sum(...$nums){
    return array_reduce($nums,fn($carry,$n)=> $carry + $n);
}
//carry = 0 , $n = 1 $carry + $n = 1
//carry = 1 , $n = 2 $carry + $n = 3
//carry = 3 , $n = 3 $carry + $n = 6
//carry = 6 , $n = 4 $carry + $n = 10
//carry = 10 , $n = 5 $carry + $n = 15
//carry = 15 , $n = 6 $carry + $n = 21



echo sum(1,2,3,4,5,6) . '😉';