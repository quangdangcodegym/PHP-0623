<?php
    class Rectangle{
        private $width;
        private $heigth;

        public function __construct($w, $h){
            $this->width = $w;
            $this->heigth = $h;
        }
        public function area(){
            return $this->width * $this->heigth;
        }
    }

    $r1 = new Rectangle(3,4);
    $r2 = new Rectangle(1,1);
    $r3 = new Rectangle(3,6);
    $r4 = new Rectangle(3,1);
    
    

    $arr = array($r1, $r2, $r3, $r4);

    // định nghĩa 1 function rồi truyền function này vào
    $func = function($a, $b){
        if ($a->area() == $b->area()) {
            return 0;
        }
        return ($a->area() < $b->area()) ? -1 : 1;
    };

    // usort($arr, $func);

    // truyền thẳng funciton vào
    usort($arr, function($a, $b){
        if ($a->area() == $b->area()) {
            return 0;
        }
        return ($a->area() < $b->area()) ? -1 : 1;
    });

    for($i=0; $i<count($arr); $i++){
        echo ($arr[$i]->area()*2 ). "<br>";
    }

?>

