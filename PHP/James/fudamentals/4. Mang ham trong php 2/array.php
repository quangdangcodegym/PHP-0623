<?php
/**
    $arr = [5,7,1,5,3];

    function myMax($arr){
        $max = $arr[0];
        for($i = 1; $i < count($arr); $i++){
            if($max < $arr[$i]){
                $max = $arr[$i];
            }
        }
        return $max;
    }
    // myMax($arr);

    // echo "Max cua họ: " . max($arr);
    // echo "Max cua minh: " . myMax($arr);
function myMax($numbers, ...$arr){
        $arrNew = [];
        if(gettype($numbers) == "array"){
            echo "Truyền vào kiểu mang";
            array_push($arrNew, ...$numbers);
        }else{
            echo "Truyền vào kiểu nhieu gia tri";
            array_push($arrNew,$numbers );
            array_push($arrNew, ...$arr);
        }

        $max = $arrNew[0];
        for($i = 1; $i < count($arrNew); $i++){
            if($max < $arrNew[$i]){
                $max = $arrNew[$i];
            }
        }
        return $max;

    }

    echo myMax([2,2,3]);
    echo myMax(3,3,15,1);


    // var_dump($arr);
        $arr = [4,10,2,0,0];   // => [4,8,10,2,0]
        $index = 1;
        for($i = $index ; $i< count($arr);$i++){
            if($i == count($arr) - 1){
                $arr[count($arr) - 1] = 0;
            }else{
                $arr[$i] = $arr[$i+1];
            }
        }
        var_dump($arr);


        $arr = [4,6,1,7,8,10];
        unset($arr[1]);         // xóa phần tử

        
 $input = array("red", "green", "blue", "yellow", "AA");
//  array_splice($input, 1, 2);
    array_splice($input, 1, 2, array("black"));
    var_dump($input);

 */

    $arr = [
        "8" => "Quang",
        8 => "Hậu"
    ];    
    var_dump($arr);

        



        



?>