@extends('layouts.simple')

@section('content')
    <div class="main-content center">
        <form class="authentication" method="POST" action="{{ route('login.post') }}">
            @csrf
            <h2 class="auth-header"><span class="highlight">Přihlášení</span></h2>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Heslo</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn-wide">Přihlásit</button>
            <div class="auth-footer">
                <a href="{{ route('show.register') }}" class="form-footer-a">Ještě nemáte účet? <span
                        class="highlight">registrace</span></a>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="error">{{ $error }}</p>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
@endsection
