@extends('layouts.simple')

@section('title')
@endsection

@section('order')
@endsection

@section('content')
    <div class="main-content center">
        <form class="authentication" method="POST" action="{{ route('register.post') }}">
            @csrf
            <h2 class="auth-header"><span class="highlight">Registrace</span> do Q-ask</h2>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="name">Uživatelské jméno</label>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <label for="password">Heslo</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Heslo znovu</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit" class="btn-wide">Registrovat</button>
            <p class="middle">Kliknutím na “Registrovat” souhlasíte se zpracováním osobních údajů.</p>
            <div class="auth-footer">
                <a href="{{ route('show.login') }}" class="form-footer-a">Už máte účet? <span
                        class="highlight">přihlášení</span></a>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="error">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
@endsection
