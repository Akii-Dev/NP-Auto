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
    <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button type="submit" class="my-6 underline decoration-[#deb841] hover:text-[#deb841]">Logout</button>
            </form>
</body>
</html>
