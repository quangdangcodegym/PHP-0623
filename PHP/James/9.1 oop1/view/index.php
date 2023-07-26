<?php

include "../controller/ProductManager.php";


$p1 = new Product(1, 'Iphone 11', "Iphone giá re", 1000);
$p2 = new Product(2, 'Iphone 12', "Iphone giá re", 1000);
$p3 = new Product(3, 'Iphone 13', "Iphone giá re", 1000);
$p4 = new Product(4, 'Iphone 14', "Iphone giá re", 1000);

$pm = new ProductManager();
$pm->addProduct($p1);
$pm->addProduct($p1);
$pm->addProduct($p1);
$pm->addProduct($p1);


$action;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameProduct;
    $descriptionProduct;
    $priceProduct;

    $action = "";
    if(isset($_POST["action"])){
        $action = $_POST["action"];
    }
    switch($action){
        case "edit":

            break;
        default:
            if (isset($_POST["name-product"])) {
                $nameProduct = $_POST["name-product"];
            }
            if (isset($_POST["description-product"])) {
                $descriptionProduct = $_POST["description-product"];
            }
            if (isset($_POST["price-product"])) {
                $priceProduct = $_POST["price-product"];
            }
        
            $max = $pm->getMaxId();
            $newProduct = new Product($max + 1, $nameProduct, $descriptionProduct, $priceProduct);
            $pm->addProduct($newProduct);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table {
            border-collapse: collapse;
        }

        .container {
            width: 50%;
        }
        .tb-product{
            width: 100%;
        }
        .row {
            display: flex;
            margin-bottom: 5px;
        }

        .col-3 {
            width: 33.33%;
        }

        .col-7 {
            width: 66.66%;
        }
        .end-col {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="frm-product" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <label for="" class="col-3">Name:</label>
                <input type="text" class="col-7" name="name-product">
            </div>
            <div class="row">
                <label for="" class="col-3">Description:</label>
                <input type="text" class="col-7" name="description-product">
            </div>
            <div class="row">
                <label for="" class="col-3">Price:</label>
                <input type="number" class="col-7" name="price-product">
            </div>
            <div class="row">
                <label for="" class="col-3"></label>
                <button>Create</button>
            </div>
        </form>
        <table border="1" class="tb-product">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pm->getProducts() as $p) : ?>
                    <tr>
                        <td><?= $p->getId() ?></td>
                        <td><?= $p->getName() ?></td>
                        <td><?= $p->getDescription() ?></td>
                        <td><?= $p->getPrice() ?></td>
                        <td class="end-col">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . "?action=edit&id=" . $p->getId(); ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a>
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>

</body>

</html>