<?php
include_once './service/ProductService.php';

use Service\ProductService;

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
                break;
        }
    }
    function handleGetRequest(){
        $action  = "";
        if(!empty($_SERVER['action'])){
            $action = $_SERVER['action'];
        }
        switch ($action){
            case 'create':
                // show create form;
                break;
            default:
                // show list
                $this->showProducts();
        }
    }
    function showProducts(){
        $products = $this->productService->getProducts();

        include './views/products.php';
    }
}

$controller = new Controller();
$controller->handleRequest();


?>