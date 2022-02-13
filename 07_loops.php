<?php
$counter = 1;
// while
// while($counter < 10){
//     echo "Counter value is $counter".'<br>';
//     $counter++;
// }
// Loop with $counter

// do - while
// do{
//     echo "Counter value is $counter".'<br>';
//     $counter++;
// }while($counter < 10);
// for
for($i = 0; $i < 10 ;$i++){
    echo "Counter value is $counter".'<br>';
    $counter++;
}
// foreach
$fruits = ['Apple','Banana','Orange'];
foreach($fruits as $i => $fruit ){
    echo $i . '- ';
    echo $fruit.'<br>';
}

// Iterate Over associative array.

$as_array = [
    'name'=> 'Mohammed El Hassan',
    'age'=>20,
    'hoppies'=> ['Programming','Learning new Things']
];

foreach($as_array as $key => $value ){
    if(is_array($value)){
        echo "$key is ".implode(',',$value);
    }else {
        echo "$key is $value and <br> ";
    }
    
}