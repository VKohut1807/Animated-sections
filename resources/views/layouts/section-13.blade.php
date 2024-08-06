@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-13.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-13.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson13 = json_decode($jsonContent, true);
    @endphp

    <section class="section_13">
        <div class="wrapper">
            <div class="content">
                <h2>Our Zoo</h2>
                <div class="gallery">
                    @foreach ($dataJson13 as $key => $card)
                        <div class="card_box">
                            <div class="card front">
                                <img src="/images/section-13/{{ $card['image']['name'] }}"
                                    alt="{{ $card['image']['alt'] }}" class="gallery_image">
                            </div>
                            <div class="card back">
                                <h4>{{ $card['text']['header'] }}</h4>
                                <h6>{!! $card['text']['subtitle'] !!}</h6>
                            </div>
                        </div>
                    @endforeach

                    @svg('/svg/section-13/triangle.svg', class="triangle_icon")
                    @svg('/svg/section-13/background_icon.svg', class="background_icon")
                </div>
            </div>
        </div>
    </section>
@endsection
