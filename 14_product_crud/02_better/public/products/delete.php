<?php
require_once '../../database.php';

$id = $_POST['id'] ?? null;
if(!$id){
    header('Location: index.php');
    exit;
}
$statment = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statment->bindValue(':id',$id);
$statment->execute();
header('Location: index.php');