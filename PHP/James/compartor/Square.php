<?php
    class Rectangle{
        private $width;
        private $height;
        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
        public function getPerimeter(){
            return 2 * ($this->width + $this->height);
        }
    }
    $r1 = new Rectangle(10, 20);
    $r2= new Rectangle(1, 1);
    $r3 = new Rectangle(1, 2);
    $r4= new Rectangle(1, 4);

    $retangles = array();
    $retangles[] = $r1;
    $retangles[] = $r2;
    $retangles[] = $r3;
    $retangles[] = $r4;



    /**
    usort($retangles, function($a, $b){
        if($a->getPerimeter() > $b->getPerimeter()) {
            return 1;
        }else{
            if($a->getPerimeter() == $b->getPerimeter()) {
                return 0;
            }else{
                return -1;
            }
                
        }
    }); //


    $func = function($a, $b){
        if($a->getPerimeter() > $b->getPerimeter()) {
            return 1;
        }else{
            if($a->getPerimeter() == $b->getPerimeter()) {
                return 0;
            }else{
                return -1;
            }
                
        }
    };

    usort($retangles, $func);
    */

    function funcComparator($a, $b){
        if($a->getPerimeter() > $b->getPerimeter()) {
            return 1;
        }else{
            if($a->getPerimeter() == $b->getPerimeter()) {
                return 0;
            }else{
                return -1;
            }
                
        }
    };

    usort($retangles, "funcComparator");
    var_dump($retangles);



?>