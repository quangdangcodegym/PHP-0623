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
                <div class="col-7">
                    <input class="form-control mx-2" type="text" placeholder="Search..." />
                </div>
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
                @foreach($products as $key=> $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>Action</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

