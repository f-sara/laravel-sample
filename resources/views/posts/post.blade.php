<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($values as $value)
        <div class="text-3xl">
            {{ $value->name}}<br>
            {{ $value->id }} <br>
            {{ $value->contents }} <br>
        </div>
    @endforeach
</body>
</html>