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
        .container{
            width: 75%;
            margin-left: auto;
            margin-right: auto;
        }
        .form-control{
            width: 100%;
        }
        .row{
            display: flex;
        }
        .col-3{
            width: 25%;
        }
        .col-9{
            width: 75%;
        }
        .mt{
            margin-top: 10px;
        }
        .mb{
            margin-bottom: 10px;
        }
        input.form-control{
            padding: 5px;
            outline: none;
        }
        .table{
            width: 100%;
            border-collapse: collapse;
        }
        .table th{
            text-align: start;
        }
        table,th,td{
            padding: 4px;
        }
        th{
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <?php include('app.php') ?>
    <div class="container">
        <div class="head-form col-9">
            <form>
                <div class="row mt mb">
                    <label class="col-3" for="">Name</label>
                    <input class="col-9 form-control" type="text" placeholder="Enter your name" />
                </div>
                <div class="row mb">
                    <label class="col-3" for="">Age</label>
                    <input class="col-9 form-control" type="text" placeholder="Enter your age" />
                </div>
                <div class="row mb">
                    <label class="col-3"  for="">Address</label>
                    <input class="col-9 form-control" type="text" placeholder="Enter your address" />
                </div>
                <div class="row mb">
                    <label class="col-3"  for=""></label>
                    <button>Create</button>
                    <button type="reset">Cancel</button>
                </div>
            </form>
        </div>
        <div class="content col-9">
            <table class="table borderd">
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
                <?php foreach($customers as $key=>$cus): ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?= $cus["name"] ?></td>
                            <td><?= $cus["age"] ?></td>
                            <td><?= $cus["address"] ?></td>
                        </tr>
                <?php endforeach; ?>
                
            </table>
        </div>
        <div class="footer">
            @Codegym Huế
        </div>
    </div>
</body>
</html>