@extends('layouts.settings')

@section('settings-content')
    <form class="authentication" method="POST" action="{{ route('updateUsername.post') }}">
        @csrf
        <h2 class="auth-header"><span class="highlight">Uživatelské jméno</span></h2>

        <label class="top-label" for="name">Současné: {{ Auth::user()->name }}</label>
        <label class="bottom-label" for="name">Nové uživatelské jméno</label>
        <input type="text" name="name" value="{{ old('name') }}" autocomplete="name" required>

        <button type="submit" class="btn-wide">Potvrdit změnu uživatelského jména</button>
        <p class="middle">{{ session('success') }}</p>
    </form>
@endsection
