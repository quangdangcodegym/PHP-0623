<?php
    /**
    B1. Viết hàm in ra các số lẻ từ 100 về 0
    B2. Viết hàm In ra 5 số chẵn đầu tiên từ 100 về 0
    B3. Viết hàm Tính tổng các số chia hết cho 7 từ 0-100
    B4. Viết hàm Kiểm tra 1 số có phải là số nguyên tố ko;
    B5. 

    //
     function printOddNumberLessThan(int $number):void{
        for($i = $number; $i>=0;$i--){
            if($i %2 ==1){
                echo $i . "<br>";
            }
        }
     }
     printOddNumberLessThan(100);

    //  Viết hàm Tính tổng các số chia hết cho 7 từ 0-100
    // Viết hàm Tính tổng các số chia hết cho number từ min-max

    function sumDivNumberFromMinToMax($number, $min, $max):int{
        $sum = 0;
        for($i = $min; $i<= $max; $i++){
            if($i % $number == 0){
                $sum += $i;
            }
        }
        return $sum;
    }

    echo sumDivNumberFromMinToMax(7, 0, 100);


    //  Viết hàm Kiểm tra 1 số có phải là số nguyên tố ko;
    function checkPrime($number):bool{
        if($number <2){
            return false;
        }
        for($i=2;$i<$number;$i++){
            if($number % $i==0){
                return false;
            }
        }
        return true;
    }

    echo checkPrime(7); //1   
    echo checkPrime(12);    // Không ra chi hết
     */

    

    
?>

