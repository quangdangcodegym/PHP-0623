<?php
namespace MyApp\Models;

class Product{
    private $id;
    private $name;
    private $description;
    private $price;

    public function __construct(){

    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    function getPrice(){
        return $this->price;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description = $description;
    }
}


?>