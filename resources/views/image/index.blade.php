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
    <a href="{{ route('images.create') }}">Upload Image</a>
    @if ($message = session('messages'))
        <div>{{ $message }}</div>
    @endif
    @foreach ($images as $image)
        <div>
            <a href="{{ $image->permalink() }}">
                <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300">
            </a>
            <div>
                <a href="{{ $image->route('edit') }}">Edit</a>
                <form action="{{ $image->route('destroy') }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>

                </form>
            </div>
        </div>
    @endforeach
</body>

</html>
