<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            //$_SERVER["REQUEST_METHOD"]
            // var_dump($_SERVER);
            $dic = [
                "hello" => "Xin chào",
                "yello" => "Màu vàng",
                "red" => "Màu đỏ"
            ];
            $result = "";
            $kw = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $kw = $_POST["kw"];
                $result = $dic[$kw];        // result = 'Xin chao'

            }
    ?>
    <div class="container">
        <form method="POST">
            <label for="">Keyword</label>
            <input type="text" value="<?php echo $kw ?>" name="kw" placeholder="Enter keyword" />
            <button type="submit">Translate</button>
        </form>
    </div>
    <?php
        echo "<h1>" . $result . "</h1>";
    ?>
</body>
</html>