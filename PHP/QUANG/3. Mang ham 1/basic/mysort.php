<?php
    $arr = [0,0,0,1,-1,5];

    for($i = 0; $i<count($arr)-1;$i++){
        for($j = $i+1;$j < count($arr);$j++){
            if($arr[$j] > $arr[$i]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    print_r($arr);


?>