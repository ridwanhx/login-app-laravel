<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Laravel 11</title>
    @vite('resources/css/app.css')

    <!-- font inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Tempatkan konten dari setiap view di sini -->
    @yield('content')
</body>

</html>
