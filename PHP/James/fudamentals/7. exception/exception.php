<?php

/**
    $a = 5;
    $b = 0;

    try{
        if($b == 0){
            throw new Exception("Mẫu số không phải là 0");
        }
    }catch(Exception $e){
        echo "Đã xử lý" . $e->getMessage() . "<br>";
    }
    echo "Chuong trinh van tiep tục" . "<br>";


    function checkNum($number): bool
    {
        if ($number > 1) {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }


    echo checkNum(-5);

    try{
        echo checkNum(5);
    }catch(Exception $e){
        echo "Gia tri truyền vào không hợp lệ";
    }
    echo "aaaaaaaaaaaaa";

    class CustomDivZeroException extends Exception{
        public function myMessage(){
            echo $this->getMessage();
        }
     }
        $a = 5;
        $b = 0;

    try{
        if($b == 0){
            throw new CustomDivZeroException("Mẫu số không phải là 0");
        }
    }catch(CustomDivZeroException $e){
        $e->myMessage();
    }
    
     */

     function divOperations(int $a, int $b): float|int{
        $a = 5;
        $b = 0;
    
        try{
            if($b == 0){
                throw new Exception("Mẫu số không phải là 0");
            }
        }catch(Exception $e){
            echo  $e->getMessage() . "<br>";
            return -1;
        }finally{
            echo "Chạy vào finnaly";
        }
        return $a/$b;
     }
     echo divOperations(5, 0);

?>