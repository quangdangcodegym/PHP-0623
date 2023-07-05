<?php
    /**
    $x = 5;
    $x = 10;

    echo "Tao moi thay doi: " . $x;
     */


    define("GREETING", "Welcome to codegym.vn!");
    echo GREETING;

    $name = "Quang Dang";
    function myTest()
    {
        global $name;
        echo "Trong ham goi bien toan cuc: " .  GREETING;
        echo "<br> Trong ham goi bien toan cuc ko phai global: " .$name;
    }

    myTest();
?>