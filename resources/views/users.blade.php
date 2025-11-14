@extends('layouts.default')

@section('title')
    Témata
@endsection

@section('order')
    <a href="#" class="filter-button active">Abecedně</a>
    <a href="#" class="filter-button">Nejnovější</a>
    <a href="#" class="filter-button">Body</a>
@endsection


@section('content')
    <div class="main-content">
        <div class="tag-cards">
            @for ($i = 0; $i < 30; $i++)
                <div class="user-card">
                    <img src="{{ asset('images/Profile.png') }}">
                    <div class="user-info">
                        <span class="card-user-name">uživatelské jméno</span>
                        <span class="card-user-points">120 bodů</span>
                    </div>
                    <a href="#2"><span class="cover-link"></span></a>
                </div>
            @endfor
        </div>

        @include('view.pagination')
    </div>
@endsection
