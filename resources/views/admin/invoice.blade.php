<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$data->name}}
    {{$data->rec_address}}
    {{$data->phone}}
    {{$data->product->title}}
    {{$data->product->price}}
    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/productimage/' . $data->product->image))) }}" alt="product" height="250" width="250">
</body>
</html>