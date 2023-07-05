

<?php
    /**
        B1. In ra các số lẻ từ 100 về 0
        B2. In ra 5 số chẵn đầu tiên từ 100 về 0
        B3. Tính tổng các số chia hết cho 7 từ 0-100
        B4. Kiểm tra 1 số có phải là số nguyên tố ko;
        B1.
        for($i = 100; $i >= 0;$i--){
            if($i % 2 == 1)
                echo $i . "<br>";
            }
        }

        B2.
        $count  = 0;
        $i = 100;
        while(true){
            if($i%2==0){
                echo $i . "<br>";
                $count++;
            }
            if($count == 5){
                break;
            }
            $i--;
        }
        //Tính tổng các số chia hết cho 7 từ 0-100
        $sum = 0;
        for($i = 0;$i<=100;$i++){
            if($i%7 == 0){
                // $sum  = $sum + $i;
                $sum += $i;
            }
        }
        echo "Tổng là: " . $sum;

        B4
        //Kiểm tra 1 số có phải là số nguyên tố ko;
    $number = 1;
    $flag = true;
    if($number <=1){
        $flag = false;
    }
    for($i=2;$i <= $number-1; $i++){
                            if($number % $i == 0){
                                $flag = false;
                                break;
                            }
                        }
                        if($flag == true){
                            echo $number . " là số nguyên tố";
                        }else{
                            echo $number . " không là số nguyên tố";
                        }
    */
    

    

?>