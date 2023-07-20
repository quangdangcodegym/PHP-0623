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
     */
    $cars = [
        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2],
        ["Land Rover", 17, 15]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="border-collapse: collapse;">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>
        <?php foreach($cars as $value): ?>
            <tr>
                <td><?= $value[0] ?></td>
                <td><?php 
                    if($value[1] %2 == 0){
                        echo $value[1]*3;
                    }else{
                        echo $value[1];
                    }
                ?></td>
                <td><?= $value[2] %2 == 0 ? $value[2]*2 : $value[2] ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</body>
</html>