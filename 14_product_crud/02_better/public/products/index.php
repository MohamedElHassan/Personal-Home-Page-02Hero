<?php

require_once '../../database.php';
$search = $_GET['search'] ?? '';
if($search){
    $statment = $pdo->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC");
    $statment->bindValue(':title',"%$search%");
}else {
    $statment = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}
$statment->execute();
$products = $statment->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '</pre>';
// echo '<hr>';
?>

<?php include_once '../../views/partials/header.php' ?>

    <h1>Product CRUD</h1>
    <a href="create.php" class="btn btn-success">Add Product</a>
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for Products" name="search" value="<?php echo $search ?>">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($products as $i => $product):?>
    <tr>
        <th scope="row"><?php echo $i + 1?></th>
        <td> <img class="product-image" src="/<?php echo $product['image'] ?>" alt="product-image"></td>
        <td><?php echo $product['title'] ?></td>
        <td><?php echo $product['price'] . '$' ?></td>
        <td><?php echo $product['create_date'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <form style="display:inline-block" action="delete.php" method="post">
                <input name="id" type="hidden" value="<?php echo $product['id'] ?>">
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    </body>   
</html>