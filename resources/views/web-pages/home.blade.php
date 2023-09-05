@extends('web-pages.partials.main-section')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
@endsection
@section('content')
    @if (session('message'))
        <div class="alert flex" aria-hidden="true" role="alert">
            <div>{{ session('message') }}</div>
            <div><i class="fa-solid fa-xmark"></i></div>
        </div>
    @endif
    @include('web-pages.partials.hero')
    <div class="main_container margin_block">
        @include('web-pages.partials.facilities')
        @include('web-pages.partials.poster')
        @include('web-pages.partials.diagnostics')
    </div>
    @include('web-pages.partials.testimonials')
    @include('web-pages.partials.contact')
@endsection
