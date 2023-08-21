<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" 
    integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container p-5">
        <h1 class="text-center">List Products</h1>
        <div class="d-flex justify-content-between mb-4">
            <button class="btn btn-primary">Create</button>
            <div class="col-4 row">
                <input class="col-7 mx-2 form-control" type="text" placeholder="Search..." />
                <button class="btn btn-primary col-4">Search</button>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>