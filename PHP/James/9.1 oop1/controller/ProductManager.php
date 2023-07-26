<?php
include '../model/Product.php';

class ProductManager{
    private array $products;

    public function __construct(){
            $this->products = array();
    }
    public function addProduct(Product $product){
            $this->products[] = $product;
    }
    public function getProducts(){
            return $this->products;
    }
    public function getMaxId(){
        $max = $this->products[0]->getId();
        for($i = 1; $i<count($this->products); $i++){
            if($this->products[$i]->getId() > $max){
                $max = $this->products[$i]->getId();
            }
        }
        return $max;
    }
}

?>