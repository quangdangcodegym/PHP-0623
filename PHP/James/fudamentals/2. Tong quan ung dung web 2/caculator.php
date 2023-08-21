<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            display: inline;
        }
        .mb{
            margin: 10px;
        }
        .caculator-form label{
            width: 100px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $num1 = $num2 = null;
            if(array_key_exists('number1', $_GET)){
                $num1 = $_GET["number1"];
            }
            if(array_key_exists('number2', $_GET)){
                $num2 = $_GET["number2"];
            }
            $operator = null;
            if(array_key_exists('operator', $_GET)){
                $operator = $_GET["operator"];
            }
            $result = "";
            if($num2 == "0" && $operator == "/"){
                $result = "Mẫu số không hợp lệ";
            }else{
                switch($operator){
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "*":
                        $result = $num1*$num2;
                        break;
                    case "/":
                        $result = $num1/$num2;
                        break;
                }
            }  
            
        }

    ?>
    <div class="container">
        <form method="GET" class="caculator-form">
            <fieldset>
                <legend>Caculator</legend>
                <div class="mb">
                    <label for="">First</label>
                    <input id="number1" value="<?php echo $num1 ?? "" ?>" type="text" name="number1" placeholder="Number 1" />
                </div>

                <div class="mb">
                    <label>Operator</label>
                    <select name="operator" id="">
                        <option <?php if($operator == "+") echo "selected";   ?>  value="+">Add</option>
                        <option <?php if($operator == "-") echo "selected";    ?> value="-">Sub</option>
                        <option <?php echo $operator == "*"  ? "selected" : ""  ?> value="*">Mul</option>
                        <option <?php echo $operator == "/"  ? "selected" : ""  ?> value="/">Div</option>
                    </select>
                </div>

                <div class="mb">
                    <label for="">Second</label>
                    <input id="number2" value="<?php echo $num2 ?? "" ?>"  type="text" name="number2" placeholder="Number 2" />
                </div>
                <div class="mb">
                    <label for=""></label>
                    <button>Caculator</button>
                    <button type="button" onclick="handleClearClick()">Clear</button>
                </div>

                <div class="mb">
                    <label for=""></label>
                    <?php echo $result ?? "" ?>
                </div>
            </fieldset>

        </form>
    </div>
    <script>
        function handleClearClick(){
            document.getElementById("number1").value = "";
            document.getElementById("number2").value = "";
        }
    </script>
</body>
</html>