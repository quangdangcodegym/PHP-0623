<?php
    /**
    $name = "Văn Hậu";
    $age = 10;
    $price = 10000.5;
    var_dump($name);
    var_dump($age);
    var_dump($price);

    echo "Cầu thủ $name đội tuyển VN";
    echo "Cầu thủ" . $name . "đội tuyển VN";

    // 
    $x = 10;
    $x = 5;
    echo $x + $y;

    // Sử dụng biến cục bộ
    function myTest(){
        $x = 5;
        echo "Bien x co gia tri la: $x";
    }
    myTest();

    // Sử dụng biến toàn cục: đánh dấu biến đó là global trong thân hàm
    $x_global = 500;
    function myTest(){
        global $x_global;
        echo "Bien x co gia tri la: $x_global";
    }
    myTest();

    // Sử dụng biến toàn cục: lấy từ CÁI MẢNG $GLOBALS['tên biến']
    $x_global = 500;
    function myTest(){
        $GLOBALS['x_global'] = 100;
        echo "Gia tri cua x_global la: " . $GLOBALS['x_global'] . "<br>";
    }
    myTest();
    echo "Gia tri bien toan cuc luc nay: " .  $x_global;


    // Khai báo 1 biến là static trong hàm, để lưu lại giá trị sau khi thực hiện hàm
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
     }
     myTest();
     myTest();
     myTest();
    **/
    

    
    
?>

