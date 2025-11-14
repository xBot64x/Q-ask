@extends('layouts.default')

@section('title')
    Nejnovější otázky
@endsection

@section('order')
    <a href="#" class="filter-button active">Nejnovější</a>
    <a href="#" class="filter-button">Nezodpovězené</a>
    <a href="#" class="filter-button">Hodnocení</a>
    <a href="#" class="filter-button">Populární</a>
@endsection

@section('content')
    <div class="main-content">
        <div class="cards">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-voting">
                        <a href="#" class="vote"><img src="{{ asset('images/Arrow up-circle.png') }}"></a>
                        <p>{{ $post->pointss }}</p>
                        <a href="#" class="vote"><img src="{{ asset('images/Arrow down-circle.png') }}"></a>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <a href="#" class="card-profile-link">
                                <div class="card-profile">
                                    <img src="{{ asset('images/profile.png') }}" class="profile-image">
                                    <div class="card-profile-info">
                                        <span class="profile-name">{{ $post->user_id }}</span>
                                        <span class="uploud-time">{{ $post->created_at }}</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="bookmark"><img src="{{ asset('images/sidebar/Bookmark.png') }}"></a>
                        </div>
                        <p class="card-text">{{ $post->body }}</p>
                        <div class='tags'>
                            <a href="#" class="tag">téma1</a>
                            <a href="#" class="tag">dlouhé téma s textem</a>
                            <a href="#" class="tag">další téma</a>
                        </div>
                        <p class="card-answers">4 odpovědi</p>
                    </div>
                    <a href="#2"><span class="cover-link"></span></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
