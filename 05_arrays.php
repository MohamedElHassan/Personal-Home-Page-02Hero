<style>
h3 {
    color: #8892BF;
    font-weight: bolder;
    font-size: 25px;
    padding-bottom: 8px;
    border-bottom: 1px solid black;
    /* echo '<br>'; */
}
</style>

<?php

// // Create array
// $names = ['Ahmed','Mohammed','Yasser','Khaled'];
// // Print the whole names
// echo '<h3>Print the whole names</h3>';

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Get element by index
// echo '<h3>Get element by index</h3>';

// echo $names[1];

// // Set element by index
// echo '<h3>Set element by index</h3>';

// $names[0] = 'Yonisify';

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Check if names has element at index 2

// if(isset($names[2])){
//     echo 'Yes, Its here';
// }

// // Append element
// echo '<h3>New Practise</h3>';

// $names[] = 'Hoda';

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Print the length of the array
// echo '<h3>New Practise</h3>';

// echo count($names);
// // Add element at the end of the array
// echo '<h3>New Practise</h3>';

// array_push($names,'Mahmoud');

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Remove element from the end of the array
// echo '<h3>New Practise</h3>';

// array_pop($names);

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Add element at the beginning of the array

// echo '<h3>New Practise</h3>';

// array_unshift($names,'54645');

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';

// // Remove element from the beginning of the array
// echo '<h3>New Practise</h3>';

// array_shift($names);

// echo '<pre>';
// echo var_dump($names);
// echo '</pre>';
// // Split the string into an array
// echo '<h3>New Practise</h3>';

// $string = 'Ahmed,Yasser,Youssef,El Hassan';


// echo '<pre>';
// echo var_dump(explode(',',$string));
// echo '</pre>';

// $string_array = explode(',',$string);
// // Combine array elements into string
// echo '<h3>New Practise</h3>';

// $string = 'Ahmed,Yasser,Youssef,El Hassan';


// echo '<pre>';
// echo var_dump(implode(',',$names));
// echo '</pre>';

// // Check if element exist in the array
// echo '<h3>New Practise</h3>';
// echo '<pre>';
// echo var_dump(in_array('El Hassan',$string_array));
// echo '</pre>';
// // Search element index in the array
// echo '<h3>New Practise</h3>';
// echo '<pre>';
// echo var_dump(array_search('El Hassan',$string_array));
// echo '</pre>';
// // Merge two arrays
// $lastNames = ['Abouhashme','Zegela7','7amada'];
// echo '<h3>New Practise</h3>';
// echo '<pre>';
// echo var_dump(array_merge($names,$lastNames));
// echo '</pre>';
// echo '<pre>';
// echo var_dump([...$names,...$lastNames]);
// echo '</pre>';
// $first_last = [...$names,...$lastNames];

// // Sorting of array (Reverse order also)
// echo '<h3>New Practise</h3>';


// echo '<pre>';
// echo var_dump($first_last);
// echo '</pre>';

// sort($first_last);

// echo '<pre>';
// echo 'Sorted Array'.'<br>'. var_dump($first_last);
// echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$as_array = [
    'name'=> 'Mohammed El Hassan',
    'age'=>20,
    'hoppies'=> ['Programming','Learning new Things']
];
echo '<h3>New Practise</h3>';
echo '<pre>';
var_dump($as_array);
echo '</pre>';
echo '<hr>';

// Get element by key
echo '<pre>';
var_dump(array_keys($as_array));
echo '</pre>';
echo '<hr>';
// Set element by key

$as_array['name'] = 'Youssef';
echo '<pre>';
var_dump($as_array);
echo '</pre>';
echo '<hr>';


// Null coalescing assignment operator. Since PHP 7.4

// if(!isset($as_array['name'])){
//     $as_array['name'] = 'Ahmed';
// }

// $as_array['address'] ??= 'El beheira';
$as_array['address'] = $as_array['address'] ?? 'Unknown';

echo '<pre>';
var_dump($as_array);
echo '</pre>';
echo '<hr>';
// Check if array has specific key

echo '<pre>';
var_dump(array_keys($as_array));
echo '</pre>';
echo '<hr>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($as_array));
echo '</pre>';
echo '<hr>';
// Print the values of the array
echo '<pre>';
var_dump(array_values($as_array));
echo '</pre>';
echo '<hr>';
// Sorting associative arrays by values, by keys

ksort($as_array);
echo '<pre>';
var_dump($as_array);
echo '</pre>';
echo '<hr>';
asort($as_array);
echo '<pre>';
var_dump($as_array);
echo '</pre>';
echo '<hr>';
// Two dimensional arrays

// $todos = [
//     ['todo1'=>'This is Todo 1 title','Completed'=>false],
//     ['todo2'=>'This is Todo 2 title','Completed'=>true],
//     ['todo3'=>'This is Todo 3 title','Completed'=>false],
// ];

// echo '<h3>New Practise</h3>';
// echo '<pre>';
// var_dump($todos);
// echo '</pre>';
// echo '<pre>';
// var_dump($todos[1]);
// echo '</pre>';