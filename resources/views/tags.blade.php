@extends('layouts.default')

@section('title', 'Témata')

@section('order')
    <a href="#" class="filter-button active">Abecedně</a>
    <a href="#" class="filter-button">Nejnovější</a>
    <a href="#" class="filter-button">Počet otázek</a>
    <a href="#" class="filter-button">Počet odpovědí</a>
@endsection


@section('content')
    <div class="main-content">
        @include('view.tagCards')

        @include('view.pagination')
    </div>
@endsection
