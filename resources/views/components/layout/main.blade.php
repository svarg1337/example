@props([
    'title',
    'h1' => null,
    ])

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.scss'])
</head>
<body>

    <header>
        <div class="container border-bottom pb-2">
            Logo
        </div>
    </header>

    <div class="container">
        <h1>{{ $h1 ?? $title }}</h1>
       {{ $slot }}
    </div>

    <footer>
        <div class="container border-top pt-2">
            Footer
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>

