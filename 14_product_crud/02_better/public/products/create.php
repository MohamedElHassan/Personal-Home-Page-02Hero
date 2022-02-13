<?php

require_once '../../database.php';
require_once '../../functions.php';
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// echo '<hr>';
$errors = [];
$title = '';
$description = '';
$price = '';
$product=[
    'image'=>''
];

if($_SERVER['REQUEST_METHOD'] === 'POST'):
require_once '../../validate_product.php';
if(empty($errors)){
    
$statement =  $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title,:image , :description, :price, :date)
");
$statement->bindValue(':title',$title);
$statement->bindValue(':image',$imagePath);
$statement->bindValue(':description',$description);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',date('Y-m-d H:i:s'));
$statement->execute();
header('Location: index.php');
    }
endif;
?>

<?php include_once '../../views/partials/header.php' ?>

<p>
    <a class="btn btn-secondary" href="index.php">Go Back To Product</a>
</p>

<h1>Create New Product</h1>

<?php include_once '../../views/products/form.php' ?>

</body>   
</html>