@extends('layouts.simple')

@section('title')
@endsection

@section('order')
@endsection

@section('content')
    <div class="main-content center">
        <form class="authentication">
            @csrf
            <h2 class="auth-header"><span class="highlight">Registrace</span> do Q-ask</h2>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="username">Uživatelské jméno</label>
            <input type="text" name="username" required>

            <label for="password">Heslo</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Heslo znovu</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit" class="btn-wide">Registrovat</button>
            <div class="auth-footer">
                <a href="{{ route('show.login') }}" class="form-footer-a">Ještě nemáte účet? <span
                        class="highlight">registrace</span></a>
            </div>
        </form>
    </div>
@endsection
