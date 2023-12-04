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
        </div>

        <h2>Name</h2>
        <ul>
            @foreach($value->names ?? [] as $name)
                <li>{{ $comment->name}}:{{ $comment->body }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>