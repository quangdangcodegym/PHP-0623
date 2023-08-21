<?php
    class StopWatch{
        private $startTime;
        private $endTime;
        public function start(){
            $this->startTime = time();
        }
        public function stop(){
            $this->endTime = time();
        }
        public function __construct()
        {
            $this->startTime = time();
        }

        public function getElapsedTime(){
            return $this->endTime - $this->startTime;
        }
    }
    $s1 = new StopWatch();
    $arr = createArray(100000);
    selectionsort($arr);
    $s1->stop();

    echo $s1->getElapsedTime() . " seconds";





    function createArray($size){
        $array = array();
        for ($i = 0; $i < $size; $i++) {
            $array[] = rand(1, 100000);
        }
        return $array;
      }
    function selectionsort(&$Array) {
        for($i=0; $i<count($Array); $i++) {
          $min_idx = $i;
      
          for($j=$i+1; $j<count($Array); $j++) {
            if($Array[$j] < $Array[$min_idx])
            {$min_idx = $j;}
          }
      
          $temp = $Array[$min_idx];
          $Array[$min_idx] = $Array[$i];
          $Array[$i] = $temp;
        }
      }

      
      


?>