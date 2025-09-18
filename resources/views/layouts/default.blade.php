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
                <a href="{{ url('/ask') }}" class="ask">Zeptat se</a>
                <a href="{{ url('/profile') }}" class="profile"></a>
            </div>
        </div>
    </header>
    <main>
        @php
            $sidebarTopLinks = [
                [
                    'url' => url('/'),
                    'icon' => 'Home',
                    'label' => 'Domů',
                ],
                [
                    'url' => url('/questions'),
                    'icon' => 'Chat_bubble',
                    'label' => 'Otázky',
                ],
                [
                    'url' => url('/users'),
                    'icon' => 'Users',
                    'label' => 'Uživatelé',
                ],
                [
                    'url' => url('/saved'),
                    'icon' => 'Bookmark',
                    'label' => 'Uložené',
                ],
                [
                    'url' => url('/themes'),
                    'icon' => 'Book',
                    'label' => 'Témata',
                ],
            ];
            $sidebarBottomLinks = [
                [
                    'url' => url('/cookies'),
                    'icon' => 'Circle',
                    'label' => 'Cookies',
                ],
                [
                    'url' => url('/privacy'),
                    'icon' => 'Shield',
                    'label' => 'Soukromí',
                ],
                [
                    'url' => url('/about'),
                    'icon' => 'User',
                    'label' => 'O nás',
                ],
                [
                    'url' => url('/contact'),
                    'icon' => 'Mail',
                    'label' => 'Kontakt',
                ],
            ];
            $currentUrl = url()->current();
        @endphp
        <div class="sidebar">
            <div class="sidebar-top">
                @foreach ($sidebarTopLinks as $link)
                    <a href="{{ $link['url'] }}" class="{{ $link['url'] === $currentUrl ? 'active' : '' }}">
                        @if ($link['url'] === $currentUrl)
                            <img src="{{ asset('/images/sidebar/' . $link['icon'] . '-w.png') }}">{{ $link['label'] }}
                        @else
                            <img src="{{ asset('/images/sidebar/' . $link['icon'] . '.png') }}">{{ $link['label'] }}
                        @endif
                    </a>
                @endforeach
            </div>
            <div class="sidebar-bottom">
                @foreach ($sidebarBottomLinks as $link)
                    <a href="{{ $link['url'] }}" class="{{ $link['url'] === $currentUrl ? 'active' : '' }}">
                        <img src="{{ asset('/images/sidebar/' . $link['icon'] . '.png') }}">{{ $link['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-top">
                    <div class="footer-links">
                        <a class="footer-a1">Q-ask</a>
                    </div>
                    <div class="footer-links">
                        <a href="{{ url('/') }}" class="footer-a2">Q-ask</a>
                        <a href="https://github.com">Zdrojový kód</a>
                        <a href="{{ url('/about') }}">O nás</a>
                    </div>
                    <div class="footer-links">
                        <a href="{{ url('/contact') }}" class="footer-a2">Kontakt</a>
                        <a href="mailto:Bot64@proton.me">Email</a>
                        <a href="https://x.com">Twitter</a>
                        <a href="https://intagram.com">Instagram</a>
                        <a href="https://discord.com">Discord</a>
                    </div>
                    <div class="footer-links">
                        <a href="{{ url('/') }}" class="footer-a2">Moje další stránky</a>
                        <a href="https://github.com">Hudbaweb</a>
                        <a href="https://github.com">Femboycraft</a>
                        <a href="https://github.com">Pictera</a>
                        <a href="https://github.com">PHP tutoriál</a>
                    </div>
                </div>

                <div class="footer-bottom">
                    <span class="copyright">Copyright © 2025 Filip Kníže</span>
                    <span><a href="{{ url('/privacy') }}">Zpracování osobních údajů</a>•<a
                            href="{{ url('/cookies') }}">Nastavení cookies</a></span>
                </div>
            </div>
    </footer>
</body>

</html>
