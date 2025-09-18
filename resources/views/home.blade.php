@extends('layouts.default')

@section('title')
    Otázky pro tebe
@endsection

@section('order')
    <a href="#" class="filter-button active">Nejnovější</a>
    <a href="#" class="filter-button">Nezodpovězené</a>
    <a href="#" class="filter-button">Hodnocení</a>
    <a href="#" class="filter-button">Populární</a>
@endsection

@section('content')
    <div>
        <div class="cards">
            @for ($i = 0; $i < 5; $i++)
                <div class="card">
                    <div class="card-voting">
                        <a href="#" class="vote"><img src="{{ asset('images/Arrow up-circle.png') }}"></a>
                        <p>13</p>
                        <a href="#" class="vote"><img src="{{ asset('images/Arrow down-circle.png') }}"></a>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <a href="#" class="card-profile-link">
                                <div class="card-profile">
                                    <img src="{{ asset('images/profile.png') }}" class="profile-image">
                                    <div class="card-profile-info">
                                        <span class="profile-name">uživatelské jméno</span>
                                        <span class="uploud-time">před 8 minutami</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="bookmark"><img src="{{ asset('images/sidebar/Bookmark.png') }}"></a>
                        </div>
                        <p class="card-text">Čau mám otázku, můžu se zeptat, chtěl bych něco vědět proto se zeptám na otázku
                        </p>
                        <div class='tags'>
                            <a href="#" class="tag">téma1</a>
                            <a href="#" class="tag">dlouhé téma s textem</a>
                            <a href="#" class="tag">další téma</a>
                        </div>
                        <p class="card-answers">4 odpovědi</p>
                    </div>
                    <a href="#2"><span class="cover-link"></span></a>
                </div>
            @endfor

            <div class="pagination">
                <a href="#" class="page-number disabled">Předešlá</a>
                <a href="#" class="page-number active">1</a>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <span class="page-dots">...</span>
                <a href="#" class="page-number">67</a>
                <a href="#" class="page-number">68</a>
                <a href="#" class="page-number">Další</a>
            </div>
        </div>
    </div>
@endsection
