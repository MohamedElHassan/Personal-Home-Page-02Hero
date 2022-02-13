<?php
namespace app\controllers;

use app\models\Product;
use app\Router;

class ProductController {
    public function index(Router $router)
    {
        $search = $_GET['search'] ?? '';
        $products = $router->db->getProducts($search);
        $router->renderView('products/index',[
            'products' => $products,
            'search' => $search
        ]);
    }

    public function create(Router $router)
    {
        $errors = [];
        $productData = [
            'title'=>'',
            'description'=>'',
            'image'=>'',
            'price'=>''
        ];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $productData['title'] = $_POST['title'];
            $productData['description'] = $_POST['description'] ?? null;
            $productData['price'] = (float)$_POST['price'];
            $productData['imageFile'] = $_FILES['image'] ?? null;

            $product = new Product();
            $product->load($productData);
            $errors = $product->save();
            // echo '<pre>';
            // echo var_dump($productData);
            // echo '</pre>';
            if(empty($errors))
            {
                header('Location: /products');
                exit;
            }
            
        }
        $router->renderView('products/create',[
            'product' => $productData,
            'errors' => $errors
        ]);
    }

    public function update(Router $router)
    {
        $id = $_GET['id'] ?? null;

        if(!$id)
        {
            header('Location: /products');
        }
        $errors=[];
        $productData = $router->db->getProductsById($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $productData['title'] = $_POST['title'];
            $productData['description'] = $_POST['description'] ?? null;
            $productData['price'] = (float)$_POST['price'];
            $productData['imageFile'] = $_FILES['image'] ?? null;

            $product = new Product();
            $product->load($productData);
            $errors = $product->save();
            // echo '<pre>';
            // echo var_dump($productData);
            // echo '</pre>';
            if(empty($errors))
            {
                header('Location: /products');
                exit;
            }

        }
        $router->renderView('products/update',[
            'product'=> $productData,
            'errors'=> $errors
        ]);

    }
    
    public function delete(Router $router)
    {
        $id = $_POST['id'] ?? null;
        if(!$id){
            header('Location: /products');
            exit;
        }
        $router->db->deleteProduct($id);
        header('Location: /products');
    }
}