<?php
    declare(strict_types=1);
    /**
    helloMessage("Hậu Đậu");
    function helloMessage($name){
        echo "Hello " . $name;
    }

    // helloMessage("Quang DAng");

    function sum($a, $b){
        return $a+$b;
     }

     $total = sum(3,5);
     echo "Tổng là: " . $total;

     // Quy định kiểu dữ liệu cho tham số
     // thêm chế độ nghiêm ngặc để để kiểm lỗi ngay khi biên dịch
     function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    // echo addNumbers(5, "5 days");

    // Tham số với giá trị mặc định
    function setHeight($height = 10) {
        echo "The height is : $height <br>";
    }
    setHeight(70);
    setHeight();

    // Quy định kiểu dữ liệu trả về
    function addNumbers(float $a, float $b):string {
        return $a + $b . " xxx ";
    }

    $s = addNumbers(5.5,10.5);

    // Dùng dấu & để truyền tham chiếu
    $num = 2;
    function add_five(&$value) {
        $value += 5;    // $value = $value + 5;
    }

    add_five($num);

    echo "Gia tri bien num: " .  $num;


    // Biến tham trị và tham chiếu
    $a = 5;
     $b = 7;

     function swap(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
     }
     swap($a, $b);
     echo $a . " " . $b;


     // Cách dùng biến global để xử lý cái hàm swap
     $a = 5;
     $b = 7;

     function swap($n1, $n2){
        global $a,$b;
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
        $a = $n1;
        $b = $n2;
     }
     swap($a, $b);
     echo $a . " " . $b;

     // Dùng global
     */

    


     
     
    
    


     
?>