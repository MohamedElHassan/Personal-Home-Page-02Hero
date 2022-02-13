<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

function randomString($n){
    $letters = '1234567890abcdefghigklmnopqrswtsrxyzABCDEFGHIGKLMNOPQRSWT';
    $str='';
    for ($i=0; $i < $n; $i++) { 
        $index = rand(0,strlen($letters) - 1);
        $str .= $letters[$index];
    }
    return $str;
}
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// echo '<hr>';
$errors = [];
$title = '';
$description = '';
$price = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'):
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');

if(!$title){
    $errors[] = 'Please Enter a Title';
}
if(!$price){
    $errors[] = 'Please Enter a Price';
}
if(!is_dir('images')) mkdir('images');

if(empty($errors)){
    $imagePath='';
    $image = $_FILES['image'] ?? null;
    if($image && $image['tmp_name']){
        $imagePath = 'images/'.randomString(8).'/'.$image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'],$imagePath);
    }

$statement =  $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title,:image , :description, :price, :date)
");
$statement->bindValue(':title',$title);
$statement->bindValue(':image',$imagePath);
$statement->bindValue(':description',$description);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',$date);
$statement->execute();
header('Location: index.php');
    }
endif;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="app.css">
<title>Product CRUD</title>
    </head>
<body>
    <h1>Create New Product</h1>
    <?php if($errors): ?> 
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <?php echo $error .'<br>' ?>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label >Product Image</label>
        <br>
        <input type="file" name="image">
    </div>
    <div class="mb-3">
        <label >Product Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
    </div>
    <div class="mb-3">
        <label >Product Description</label>
        <textarea class="form-control" name="description" ><?php echo $description ?></textarea>
    </div>
    <div class="mb-3">
        <label >Product Price</label>
        <input type="number" step=".01" class="form-control" name="price" value="<?php echo $price ?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>   
</html>