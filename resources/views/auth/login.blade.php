@extends('layouts.simple')

@section('title')
@endsection

@section('order')
@endsection

@section('content')
    <div class="main-content center">
        <form class="authentication">
            @csrf
            <h2 class="auth-header"><span class="highlight">Přihlášení</span></h2>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="password">Heslo</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn-wide">Přihlásit</button>
            <div class="auth-footer">
                <a href="{{ route('show.register') }}" class="form-footer-a">Ještě nemáte účet? <span
                        class="highlight">registrace</span></a>
            </div>
        </form>
    </div>
@endsection
