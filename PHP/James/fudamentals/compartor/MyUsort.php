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

    interface IComparator{
        function compare($a, $b): int;
    }

    function myUsort(&$arr,IComparator $callback){
        for($i = 0; $i < count($arr)-1;$i++){
            for($j = $i+1; $j < count($arr); $j++){
                if($callback->compare($arr[$i], $arr[$j]) > 0){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
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


    class ComparatorByArea implements IComparator{
        public function compare($a, $b): int{
            if($a->getArea() > $b->getArea()){
                return 1;
            }else{
                if($a->getArea() == $b->getArea()){
                    return 0;
                }else{
                    return -1;
                }
            }
        }
    }


    $comparator = new ComparatorByArea();
    myUsort($retangles, $comparator);

    var_dump($retangles);
?>