<?php
    class StopWatch{
        private int $startTime;
        private int $endTime;

        public function start():void{
            $this->startTime = time();  //9h30 : 234567890
        }
        public function stop():void{
            $this->endTime = time();    // 9h40: 234577890
        }
        public function getElapsedTime(){
            return $this->endTime - $this->startTime;
        }
    }

    $stopWatch = new StopWatch();
    $stopWatch->start();

    $arr = createArray(100000);
    interchagneSort($arr);
    $stopWatch->stop();
    echo $stopWatch->getElapsedTime() . " seconds";


    function createArray($size){        //1000
        $array = array();
        for ($i = 0; $i < $size; $i++) {
            $array[] = rand(1, 100000);
        }
        return $array;
      }

    function interchagneSort(&$arr){
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
    }
?>