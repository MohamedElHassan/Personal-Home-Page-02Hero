<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;
if(!$id){
    header('Location: index.php');
    exit;
}
$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($_FILES);
echo '</pre>';
echo '<hr>';
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
$title = $product['title'];
$description = $product['description'] ;
$price = $product['price'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if(!$title){
        $errors[] = 'Please Enter a Title';
    }
    if(!$price){
        $errors[] = 'Please Enter a Price';
    }
    if(!is_dir('images')) mkdir('images');

    if(empty($errors)){
            $imagePath= $product['image'];
            $image = $_FILES['image'] ?? null;

            if($image && $image['tmp_name']){
                if($product['image']){
                    unlink($product['image']);
                }
                $imagePath = 'images/'.randomString(8).'/'.$image['name'];
                mkdir(dirname($imagePath));
                move_uploaded_file($image['tmp_name'],$imagePath);
            }
        $statement =  $pdo->prepare("UPDATE products SET
        title = :title, image = :image, description = :description, price = :price WHERE id = :id");
        $statement->bindValue(':title',$title);
        $statement->bindValue(':image',$imagePath);
        $statement->bindValue(':description',$description);
        $statement->bindValue(':price',$price);
        $statement->bindValue(':id',$id);
        $statement->execute();
        header('Location: index.php');
        }
    };
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
    <h1>Update Product <b><?php echo $product['title'] ?></b></h1>
    <?php if($errors): ?> 
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <?php echo $error .'<br>' ?>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
            <?php if($product['image']): ?>
                <img src="<?php echo $product['image'] ?>" alt="product-image" class="update-image">
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