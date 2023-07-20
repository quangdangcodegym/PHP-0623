<?php
class Shape{
    private $color;
    private $filled;
    public function __construct($color, $filled){
        $this->color = $color;
        $this->filled = $filled;
    }
    public function getColor(){
        return $this->color;
    }
    public function getFilled(){
            return $this->filled;
    }
    public function setColor($color){
            $this->color = $color;
    }
    public function setFilled($filled){
            $this->filled = $filled;
    }
}
class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($color, $filled, $width, $height){
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->height = $height;
        // $this->color = $color;
        // $this->filled = $filled;
    }

    public function __toString()
    {
        return "Color: " . $this->getColor() . " filled: " . 
        $this->getFilled() . " height: " . $this->height .
        " width: ". $this->width;
    }
}
$s1 = new Rectangle("RED", false, 200, 400);
echo $s1->__toString();

?>