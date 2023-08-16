<?php
include_once './service/ProductService.php';
include_once './models/Product.php';


use MyApp\Service\ProductService;
use MyApp\Models\Product;

class Controller{

    private ProductService $productService;
    function __construct(){
        $this->productService = new ProductService();
    }

    function handleRequest(){
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->handleGetRequest();
                break;
            case 'POST':
                $this->handlePostRequest();
                break;
        }
    }
    function handleGetRequest(){
        $action  = "";
        if(!empty($_REQUEST['action'])){
            $action = $_REQUEST['action'];
        }

        switch ($action){
            case 'create':
                $this->showProductCreateForm();
                break;
            case 'edit':
                $this->showProductEditForm();
                break;
            default:
                // show list
                $this->showProducts();
        }
    }

    function handlePostRequest(){
        $action  = "";
        if(!empty($_REQUEST['action'])){
            $action = $_REQUEST['action'];
        }

        switch ($action){
            case 'create':
                $this->insertProduct();
                break;
            
        }
    }
    function insertProduct(){
        $product = new Product();
        if(!empty($_REQUEST['name'])){
            $product->setName($_REQUEST['name']);
        }
        if(!empty($_REQUEST['description'])){
            $product->setDescription($_REQUEST['description']);
        }
        if(!empty($_REQUEST['price'])){
            $product->setPrice($_REQUEST['price']);
        }

        $this->productService->saveProduct($product);
        $this->showProducts();
    }
    function showProducts(){
        $products = $this->productService->getProducts();
        include './views/list-products.php';
    }
    function showProductEditForm(){
        include './views/edit-product.php';
    }
    function showProductCreateForm(){
        include './views/create-product.php';
    }
}

$controller = new Controller();
$controller->handleRequest();


?>