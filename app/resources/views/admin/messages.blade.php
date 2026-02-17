<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col">
    @foreach ($messages as $message)
        <p>{{ $message->title }}</p>
        <p>{{ $message->name }}</p>
        <p>{{ $message->email }}</p>
        <p>{{ $message->phone }}</p>
        <p>{{ $message->content }}</p>
        
        
    @endforeach
    </div>

</body>
</html>