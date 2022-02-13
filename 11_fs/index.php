<?php
// Magic constants

echo __DIR__;
echo '<hr>';
echo __FILE__;
echo '<hr>';
echo __LINE__;
// Create directory

mkdir('Test');
// Rename directory

rename('Test','Test3');

// Delete directory
rmdir('Test3');
echo '<hr>';

// Read files and folders inside directory

$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo '<hr>';
echo file_get_contents('lorem.txt');

file_put_contents('kosa.txt',$users);


// file_get_contents from URL
$users = file_get_contents('https://jsonplaceholder.typicode.com/users');

$json_data = json_decode($users,true);
echo '<pre>';
var_dump($json_data);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file