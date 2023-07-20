<?php
    /**
    // var arr = [4,5,6,1];     arr[2], arr.lenght
    // var arr1 = new Array();

    $cars = array("Volvo", "BMW", "Toyota");

    echo $cars[2] . "<br>";
    echo count($cars);

    for($i = 0; $i<count($cars);$i++){
        echo $cars[$i] . "<br>";
    }

    // duyệt mảng bằng foreach
    $cars1 = ["Volvo", "BMW", "Toyota"];
    foreach($cars1 as $em){
        echo $em . "<br>";
    }


    // Mảng associate array: key và value
    $key = "Phúc";
    $points = ["Hậu"=> "Hằng", "Phúc"=>"Hậu", "Liêm"=>"Cúc", 1 => "Ni"];

    echo $points['Phúc'] . "<br>";
    echo $points[1] . "<br>";
    echo $points[$key] . "<br>";

    foreach($points as $key=>$value){
        echo "key : " . $key . " value: " . $value . "<br>";
    }
    
    foreach($points as $value){
        echo " value: " . $value . "<br>";
    }
    */
    
    $ages = [1 => 28, 2 => 28, 1=>30];
    echo count($ages);
    var_dump($ages);


    



?>