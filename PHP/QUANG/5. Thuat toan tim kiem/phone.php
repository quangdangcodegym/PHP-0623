<?php
    if (isset($_POST['contact_list'])) {
        var_dump(htmlspecialchars($_POST['contact_list']));
        $numbers = explode("," , htmlspecialchars($_POST['contact_list']));
        var_dump($numbers);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Phone select</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <textarea id="contact_list" name="contact_list" rows="5" cols="40"></textarea>
        <input type="submit" name="submit" value="Send" id="submit"/>
    </form>
    
</body>
</html>