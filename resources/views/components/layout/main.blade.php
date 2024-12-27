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
                    
                    <div class="p-2">
                    {{ auth()->user()->email }}
                    </div>
                    <div class="p-2 bg-warning">
                        <a href="{{ route('auth.sessions.logout') }}">Выйти</a>
                    </div>
  
                </div>
            </div>
        </div>
    </header>

    <div class="container">

    <x-alert.status />
    
        <div class="row">
            <div class="col col-3">
                menu
            </div>
            <div class="col col-9">
                <h1>{{ $h1 ?? $title }}</h1>
                {{ $slot }}
            </div>
        </div>


    </div>

    <footer>
        <div class="container border-top pt-2">
            Footer
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>

</html>