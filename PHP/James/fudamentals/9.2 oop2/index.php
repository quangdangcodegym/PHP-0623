<?php

    abstract class Shape{
        private $color;
        protected $filled;
        public function __construct($color, $filled){
            $this->color = $color;
            $this->filled = $filled;
        }
        public abstract function getPerimeter();

        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }
        public function setFilled($filled){
            $this->filled = $filled;
        }
        public function getFilled(){
            return $this->filled;
        }

        public final function __toString()
        {
            return "color: " . $this->getColor() . 
            " filled: " . ( $this->getFilled() ? "TRUE" : "FALSE") .
            " area: " . $this->getArea();
        }
    }

    class Rectangle extends Shape implements Resizeable{
        private $width;
        private $height;
        public function __construct($width, $height){
            parent::__construct("white", false);
            $this->width = $width;
            $this->height = $height;
            // $this->color = "black";  // không truy cập được thuộc tính private của lớp cha
            // $this->filled = false;
        }


        public function getArea(){
            return $this->width * $this->height;
        }
        public function getPerimeter(){
            return 2 * ($this->width + $this->height);
        }

        public function __toString()
        {
            return "RECTANGLE GHI ĐÈ";
        }

        public function resize($percent){
            $this->width = $this->width * $percent/100;
            $this->height = $this->height * $percent/100;
        }
    }


    interface Resizeable{
         function resize($percent);
         function __toString();
    }


    $r1 = new Rectangle(2,3);
    $r1->setColor("RED");
    $r1->setFilled(true);
    echo $r1;

    // $r2 = new Shape("RED", false); lớp trừu tượng thì ko thể tạo đối tượng

?>