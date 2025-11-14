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
    <div class="main-content">
        @include('view.questionCards')

        @include('view.pagination')
    </div>
@endsection
