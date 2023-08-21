<?php

namespace Service;

include '../model/Product.php';
include '../utils/JsonUtils.php';
use  Models\Product;
use Utils\JsonUtils;

define("pathProducts", "products.json");
class ProductService {
    private JsonUtils $jsonUtils;

    public function __construct(){
            $this->jsonUtils = new JsonUtils(); 

            
            if(empty($this->jsonUtils->loadData(pathProducts))){
                $products = array();
                $p1 = new Product(1, 'Iphone 11', "Iphone giá re", 1000);
                $p2 = new Product(2, 'Iphone 12', "Iphone giá re", 1000);
                $p3 = new Product(3, 'Iphone 13', "Iphone giá re", 1000);
                $p4 = new Product(4, 'Iphone 14', "Iphone giá re", 1000);
    
                $products['1'] = $p1;
                $products['2'] = $p2;
                $products['3'] = $p3;
                $products['4'] = $p4;

                
                $this->jsonUtils->saveData($products, pathProducts);
            }else{
                $products = $this->jsonUtils->loadData(pathProducts);
            }
    }
    public function addProduct(Product $product){

            $products  = $this->getProducts();
            $products[] = $product;

            $this->jsonUtils->saveData($products, pathProducts);
    }
    public function getProducts(){
            $data = $this->jsonUtils->loadData(pathProducts);

            $products = [];
            foreach($data as $key => $item){
                $p = new Product($item["id"], $item["name"], $item["description"], $item["price"]);
                $products[] = $p;
            }
            return $products;
    }
    public function getMaxId(){
        $products = $this->getProducts();

        $max = $products[0]->getId();
        for($i = 1; $i<count($products); $i++){
            if($products[$i]->getId() > $max){
                $max = $products[$i]->getId();
            }
        }
        return $max;
    }

    public function getProductById($id){
        $products = $this->getProducts();
        foreach($products as $product){
            if($product->getId() == $id){
                return $product;
            }
        }
        return null;

    }

    public function updateProduct($id, Product $product){
        $products  = $this->getProducts();
        foreach($products as $key => $item){
            if($item->getId() == $id){
                $item->setName($product->getName());
                $item->setDescription($product->getDescription());
                $item->setPrice($product->getPrice());
                break;
            }
        }
        $this->jsonUtils->saveData($products, pathProducts);
    }

    public function deleteProduct($id){
        $products = $this->getProducts();

        foreach($products as $key => $item){
            if($item->getId() == $id){
                unset($products[$key]);
                break;
            }
        }
        $this->jsonUtils->saveData($products, pathProducts);
    }
}

?>