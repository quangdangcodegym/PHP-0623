@extends('categories.layout')
@section('content')
<div class="container row justify-content-center ms-auto me-auto mt-5">
    <form class="col-6" action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name..." value="{{ $category->name}}">
                @error('name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="detail" class="form-label">Detail</label>
                <textarea type="text" class="form-control" id="detail" name="detail" placeholder="detail..." style="height: 120px">{{$category->detail}}</textarea>
                @error('detail')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="image" class="form-label">Image</label>
                <input onchange="loadFile(event)" class="form-control" type="file" id="image" name="image" placeholder="image...">
                @error('image')
                <span style="color: red">{{ $message }}</span>
                @enderror

                <img id='imgUpdate' src="/image/{{ $category->image }}" alt="" width="200px" height="200px">
            </div>
            <div class="col-xs-12 col-md-12 col-sm-12 text-center mt-5">
                <a href="{{ url('/products') }}" class="btn btn-secondary">Back</a>
                <button type="Submit" value="Submit" class="btn btn-primary">Update product</button>
            </div>
        </div>
    </form>
</div>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imgUpdate');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

@endsection