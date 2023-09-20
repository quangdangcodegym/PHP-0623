@extends('categories.layout')
@section('content')
<div class="mt-5">
    <a type="button" class="btn btn-primary mt-2 mb-5" href="{{ route('categories.create') }}">Create product</a>
    <h2 class="text-center">
        LIST PRODUCT
    </h2>
</div>
<div class="row">
    @if(session('msg'))
    <script>
        var valueMsg = '{{ session("msg")}}';
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: valueMsg,
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif

    @if(session('msgError'))
    <script>
        var valueMsg = '{{ session("msgError")}}';
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: valueMsg,
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Detail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @if (!empty($categories))
            @foreach ($categories as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="/image/{{ $item->image }}" width="200px" /></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->detail }}</td>
                <td>
                    <a href="#" class="btn btn-info">Show</a>
                    <a href="{{ route('categories.update', ['id' => $item->id])}}" class="btn btn-primary">Edit</a>
                    <button onclick="handleBtnDelClick('{{$item->id}}', '{{ $item->name}}')" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">Data not found!!</td>
            </tr>
            @endif
        </tbody>
    </table>

</div>
@endsection
<script>
    function handleBtnDelClick(id, name) {
        Swal.fire({
            title: 'Are you sure?',
            text: name,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.assign('/categories/delete/' + id);
            }
        })
    }
</script>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mt-5">
        <h2 class="text-center">
            LIST PRODUCT 
        </h2>
    </div>
</body> 
</html> -->