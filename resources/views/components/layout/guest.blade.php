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
        <div class="container border-bottom pb-2">
            <div class="row">
                <div class="d-flex justify-content-end ">
                    @auth
                    <div class="p-2">
                        {{ auth()->user()->email }}
                    </div>
                    <div class="p-2 bg-warning">
                        <a href="{{ route('auth.sessions.logout') }}">Выйти</a>
                    </div>
                    @else
                    <div class="p-2 bg-warning">
                        <a href="{{ route('auth.sessions.create') }}">Вход</a>
                    </div>
                    <div class="p-2 bg-danger">
                        <a href="{{ route('auth.registration.create') }}">Регистрация</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <div class="container py-2">
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