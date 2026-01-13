@extends('layouts.settings')

@section('settings-content')
    <form class="authentication" method="POST" action="{{ route('updatePassword.post') }}">
        @csrf
        <h2 class="auth-header"><span class="highlight">Heslo</span></h2>

        <label for="current_password">Aktuální heslo</label>
        <input type="password" name="current_password" autocomplete="current-password" required>

        <label for="password">Nové heslo</label>
        <input type="password" name="password" autocomplete="new-password" required>

        <label for="password_confirmation">Nové heslo znovu</label>
        <input type="password" name="password_confirmation" autocomplete="new-password" required>

        <button type="submit" class="btn-wide">Potvrdit změnu emailu</button>
        <p class="middle">{{ session('success') }}</p>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="error middle">{{ $error }}</p>
            @endforeach
        @endif
    </form>
@endsection
