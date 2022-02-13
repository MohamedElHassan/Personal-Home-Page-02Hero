<?php
session_start();

// echo session_id();

// $_SESSION['name'] = 'Mohammed El Hassan';

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo '<hr>';

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;
$pageCounter = $_SESSION['page_counter'] ?? 0;

$_SESSION['visitors'] = $_SESSION['visitors'] ?? 0;
$_SESSION['visitors']++;
$visitors = $_SESSION['visitors'] ?? 0;


if($_SESSION['page_counter'] === 10){
    
    echo '<h4>Thanks for Visiting Us 10 Times</h4>';
    session_unset();
    session_destroy();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page You have visited the site : <?php echo $pageCounter ?> times</h1>
<h2>Visitors on this site: <?php echo $visitors ?></h2>
</body>
</html>
