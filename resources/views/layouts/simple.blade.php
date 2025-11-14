<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fdfffd">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/css/header.css')
    @vite('resources/css/sidebar.css')
    @vite('resources/css/footer.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="header">
            <a href="{{ url('/') }}" class="logo">Q-ask</a>
            <form>
                @csrf
                <input type="text" placeholder="Vyhledat...">
            </form>
            <div class="header-right">
                @if (false)
                    <a href="{{ route('posts.create') }}" class="btn">Zeptat se</a>
                    <a href="{{ url('/profile') }}" class="profile"><img src="{{ asset('images/Profile.png') }}"></a>
                @else
                    <a href="{{ route('show.login') }}" class="btn-secondary">Přihlásit se</a>
                    <a href="{{ route('show.register') }}" class="btn">Registrovat se</a>
                @endif

            </div>
        </div>
    </header>
    <main>
        <div class="content center">
            <div class="header-h2-content">
                <h2 class="header-h2">@yield('title')</h2>
                <div class="ordering">
                    @yield('order')
                </div>
            </div>
            @yield('content')
        </div>
    </main>
</body>

</html>
