<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $customers = [
        "1" => [
            "id" => 1,
            "name"=> "Quang Dang",
            "address"=> "28 NTP",
            "image" => null
        ],
        "2" => [
            "id" => 2,
            "name"=> "Quang Dang2",
            "address"=> "28 NTP2",
            "image" => null
        ]
    ]
?>
<body>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
            <?php
                foreach($customers as $key => $values){
                    echo "<tr>";
                    foreach($values as $key_child => $value ){
                        echo "<script>console.log('$key_child')</script>";
                        echo "<td>" . $values[$key_child] . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>