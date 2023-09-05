@extends('web-pages.partials.main-section')
@section('content')
    @if (session('message'))
        <div class="alert flex">
            <div>{{ session('message') }}</div>
            <div><i class="fa-solid fa-xmark"></i></div>
        </div>
    @endif
    <div id="authentication_card" class="min-h-screen hidden flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
        style="background-color: var(--color-bg)">
        <div>
            {{ $logo }}
        </div>

        <div id="authentication_box"
            class="w-full sm:max-w-md mt-2 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            style="color: var(--color-primary); background-color: var(--color-accent)">
            {{ $slot }}
        </div>
    </div>
@endsection()
