@extends('layouts.default')

@section('title', 'Nastavení')

@section('content')
    <div class="main-content">
        <?php $currentUrl = url()->current(); ?>
        <div class="settings-content">
            <div class="settings-nav">
                <a href="{{ route('email') }}" class="{{ url('/email') === $currentUrl ? 'active' : '' }}">
                    Email
                    @if (url('/email') === $currentUrl)
                        <img src="{{ asset('/images/keyboard_arrow_up2.png') }}">
                    @else
                        <img src="{{ asset('/images/keyboard_arrow_up.png') }}">
                    @endif
                </a>
                <a href="{{ route('password') }}" class="{{ url('/password') === $currentUrl ? 'active' : '' }}">
                    Heslo
                    @if (url('/password') === $currentUrl)
                        <img src="{{ asset('/images/keyboard_arrow_up2.png') }}">
                    @else
                        <img src="{{ asset('/images/keyboard_arrow_up.png') }}">
                    @endif
                </a>
                <a href="{{ route('username') }}" class="{{ url('/username') === $currentUrl ? 'active' : '' }}">
                    Uživatelské jméno
                    @if (url('/username') === $currentUrl)
                        <img src="{{ asset('/images/keyboard_arrow_up2.png') }}">
                    @else
                        <img src="{{ asset('/images/keyboard_arrow_up.png') }}">
                    @endif
                </a>
                <a href="{{ route('profile_picture') }}"
                    class="{{ url('/profile_picture') === $currentUrl ? 'active' : '' }}">
                    Profilový obrázek
                    @if (url('/profile-picture') === $currentUrl)
                        <img src="{{ asset('/images/keyboard_arrow_up2.png') }}">
                    @else
                        <img src="{{ asset('/images/keyboard_arrow_up.png') }}">
                    @endif
                </a>
                <a href="{{ route('remove') }}" class="{{ url('/remove') === $currentUrl ? 'active' : '' }}">
                    Smazat účet
                    @if (url('/remove') === $currentUrl)
                        <img src="{{ asset('/images/keyboard_arrow_up2.png') }}">
                    @else
                        <img src="{{ asset('/images/keyboard_arrow_up.png') }}">
                    @endif
                </a>
            </div>
            @yield('settings-content')
        </div>
    </div>
@endsection
