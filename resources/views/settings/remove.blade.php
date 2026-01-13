@extends('layouts.settings')

@section('settings-content')
    <form class="authentication" method="POST" action="{{ route('destroy.post') }}">
        @csrf
        <h2 class="auth-header"><span class="highlight">Smazání účtu</span></h2>

        <label class="top-label" for="current_password">Tuto akci nelze vrátit. Váš účet bude trvale odstraněn ze serveru.
            Vámi vytvořené otázky a komentáře zůstanou pod anonymním jménem</label>
        <label class="bottom-label" for="current_password">Zadejte vaše heslo pro smazání účtu</label>
        <input type="password" name="current_password" required autocomplete="current-password">

        <button type="submit" class="btn-wide dangerous">Potvrdit smazání účtu</button>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="error middle">{{ $error }}</p>
            @endforeach
        @endif
    </form>
@endsection
