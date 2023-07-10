<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .col-6{
            width: 33.33%;
        }
        .d-flex{
            display: flex;
        }
        .justity-content-space-between{
            justify-content: space-between;
        }
        .justity-content-center{
            justify-content: center;
        }
        .mt-5{
            margin-top: 50px;
        }
        .mt-1{
            margin-top: 10px;
        }
        .mb-1{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
            $currencyFrom = null;
            $currencyTo = null;
            $number = null;
            $result = null;
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['s-currency-from'])){
                    $currencyFrom = $_POST['s-currency-from'];
                }
                if(isset($_POST['s-currency-to'])){
                    $currencyTo = $_POST['s-currency-to'];
                }
                if(isset($_POST['txtNumber'])){
                    $number = $_POST['txtNumber'];
                }
                if($currencyFrom == "usa" && $currencyTo == "vnd"){
                    $result = $number*23000;
                }
                if(($currencyFrom == "usa" && $currencyTo == "usa") || ($currencyFrom == "vnd" && $currencyTo == "vnd")){
                    $result = $number;
                }
                if($currencyFrom == "vnd" && $currencyTo == "usa"){
                    $result = $number/23000;
                }
            }
    ?>
    <div class="container">
        <form action="" method="post" class="d-flex justity-content-center">
            <div class="form-currency col-6 mt-5">
                <h4 class="mb-1">Currency convert</h4>
                <div class="d-flex justity-content-space-between mb-1">
                    <select name="s-currency-from">
                        <option value="usa" <?php echo $currencyFrom == "usa" ? "selected" : false ?>>USA</option>
                        <option value="vnd" <?php echo $currencyTo == "vnd" ? "selected" : false ?>>VND</option>
                    </select>
                    <select name="s-currency-to">
                        <option value="vnd" <?php echo $currencyTo == "vnd" ? "selected" : false ?>>VND</option>
                        <option value="usa" <?php echo $currencyFrom == "usa" ? "selected" : false ?>>USA</option>
                    </select>
                </div>
                <div class="d-flex justity-content-center mb-1">
                    <input type="text" placeholder="Enter number" value="<?php echo $number ?? false ?>" name="txtNumber" >
                    <button type="submit">Convert</button>
                </div>
                <div class="d-flex justity-content-center mb-1">
                    <?php 
                        $format = $currencyTo == "usa" ? "$" : "vnd";
                        if($result!=null ) {
                            $result = round($result, 2);
                            echo "<label for=''>Result: $result - $format</label>";
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>