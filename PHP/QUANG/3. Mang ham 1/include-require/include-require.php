<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <h1>Welcome to my home page!</h1>
    <?php
        include 'vars.php';
        echo "I have a $color $car.";
    ?>
    <?php
        require 'noneExistFile.php';
        echo "No error. Executed.";
    ?>
    <p>Some more text.</p>
    <?php
    include 'footer.php';
    ?>
</body>
</html>