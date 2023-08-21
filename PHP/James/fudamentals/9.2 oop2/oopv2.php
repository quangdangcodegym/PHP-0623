<?php
abstract class Shape{
    private $color;
    protected $filled;
    public  function __construct($color, $filled ){
        $this->$color = $color; // should be $this->color = $color;
        $this->$filled = $filled; // should be $this->filled = $filled;
     }
    function setColor($color){
        $this->color = $color;
     }
     function setFilled($filled){
        $this->filled = $filled;
     }

     function getColor(){
        return $this->color;
    }
    function getFilled(){
        return $this->filled;
    }

    abstract function getArea();
    abstract function getPerimeter();

    function __toString(){
        return $this->getColor() . " " . $this->getFilled();
    }

}

class Rectangle extends Shape{
    private $width;
    private $height;
    public function __construct($c, $f, $width, $height){
        parent::__construct($c, $f); // should be parent::__construct($color, $filled);
        $this->width = $width;
        $this->height = $height;
    }
    function getWidth(){
        return $this->width;
    }   
    function getHeight(){
        return $this->height;
    }
    function getArea(){
        return $this->width * $this->height;
    }
    function getPerimeter(){
        return $this->width * 2 + $this->height * 2;
    }
   
}

/**
class Circle extends Shape{
    private $radius;
    function __construct($color, $filled, $radius){
        parent::__construct($color, $filled); // should be parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    function getRadius(){
        return $this->radius;
    }
    function getArea(){
        return 3.14 * $this->radius * $this->radius;
    }
    function getPerimeter(){
        return 2 * 3.14 * $this->radius;
    }
}
 */
     
 $r = new Rectangle("red", "true", 10, 20);
 var_dump($r);
 echo $r; // should be echo $r->__toString();


?>