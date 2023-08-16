<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php foreach($products as $key=>$p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= $p['description'] ?></td>
                <td><?= $p['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>