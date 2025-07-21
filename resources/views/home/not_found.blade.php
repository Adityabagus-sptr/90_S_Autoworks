@extends('main')
@section('title', 'Not Found')

@section('content')
<section class="hero-section relative overflow-hidden h-screen bg-center bg-cover bg-no-repeat" x-data="{ mobileNavOpen: false }">
    @include('layouts.topbar')
</section>
    <div class="w-screen h-screen flex items-center justify-center">
        <img src="{{ asset('images/not_found.jpg') }}" alt="Not Found" class="w-full h-full object-cover">
    </div>
@endsection