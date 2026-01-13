@extends('layouts.settings')

@section('settings-content')
    <form class="authentication" method="POST" action="{{ route('updateAvatar.post') }}" enctype="multipart/form-data">
        @csrf
        <h2 class="auth-header"><span class="highlight">Profilový obrázek</span></h2>

        <label class="top-label middle" for="avatar">Vyber obrázek</label>
        <div class="profile-picture-container middle">
            <label class="hidden-label" for="avatar">
                <div class="plus-btn"></div>
                <img for="avatar" src="{{ asset(Auth::user()->avatar) }}" id="profile-picture" class="profile-picture">
            </label>
            <input class="uploud-profile-picture" type="file" id="avatar" name="avatar"
                accept="image/png, image/jpeg, image/jpg, image/bmp" required autocomplete="avatar"
                onchange="ShowImage(this);" />
        </div>

        <button type="submit" class="btn-wide">Potvrdit změnu profilového obrázku</button>

        <p class="middle">{{ session('success') }}</p>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="error middle">{{ $error }}</p>
            @endforeach
        @endif
    </form>
@endsection
