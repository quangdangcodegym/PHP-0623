<?php
/**
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];
    $total = 0;
    for($i = 0; $i<count($cars);$i++){
        for($j=0;$j<count($cars[$i]);$j++){
            if($j == 2 ){
                $total += $cars[$i][$j];
            }
        }
    }
    echo "Tổng là: " . $total;

     */
    $cars = [
        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2],
        ["Land Rover", 17, 15]
    ];
    echo "
            <table border='1' style='border-collapse: collapse;'>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>
        ";
        $total = 0;
        for($i = 0; $i<count($cars);$i++){
            $tr = "<tr>";
            for($j=0;$j<count($cars[$i]);$j++){
                $tr .= "<td>";
                $tr .= $cars[$i][$j];
                $tr .= "</td>";
            }
            $tr .= "</tr>";
            echo $tr;

        }
        echo "</table>";
?>