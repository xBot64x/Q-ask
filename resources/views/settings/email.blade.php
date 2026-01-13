@extends('layouts.settings')

@section('settings-content')
    <form class="authentication" method="POST" action="{{ route('updateEmail.post') }}">
        @csrf
        <h2 class="auth-header"><span class="highlight">Email</span></h2>

        <label class="top-label" for="email">Současné: {{ Auth::user()->email }}</label>
        <label class="bottom-label" for="email">Nový email</label>
        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required>

        <button type="submit" class="btn-wide">Potvrdit změnu emailu</button>
        <p class="middle">{{ session('success') }}</p>
    </form>
@endsection
