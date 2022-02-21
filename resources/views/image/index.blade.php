<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Pic</title>
</head>

<body>
    <h1>All Images</h1>
    <a href="{{route('images.create')}}">Upload Image</a>
    @foreach ($images as $image)
        <div>
            <a href="{{ $image->permalink() }}">
                <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300">
            </a>
        </div>
    @endforeach
</body>

</html>
