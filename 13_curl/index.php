<?php

$url = 'https://api.github.com/users/MohamedElHassan';
// Sample example to get data.
$request = curl_init($url);
curl_setopt($request,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($request);



$code = curl_getinfo($request,CURLINFO_HTTP_CODE);
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<hr>';


// Get response status code
echo '<pre>';
var_dump($code);
echo '</pre>';
echo '<hr>';

curl_close($request);
// set_opt_array

$user = [
    'name'=>'Mohammed',
    'age'=>20,
    'hoppies'=>['Gaming','Code']
];

// Post request
$resource = curl_init();
curl_setopt_array($resource,[
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type:application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);
$result = curl_exec($resource);

curl_close($resource);

echo $result;