@extends('app')

@section('styles')
    @vite('resources/scss/layouts/home.scss')
@endsection

@section('script')
    {{-- @vite('resources/tsx/home.tsx') --}}
@endsection

@section('content')
    <div class="home_page">
        <div class="wrapper">
            <section id="home_page"></section>
        </div>
    </div>
@endsection
