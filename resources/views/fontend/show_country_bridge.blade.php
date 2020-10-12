@extends('fontend.layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/showgallery.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .image-bridge{
            height: 225px;
        }
        .image-bridge img{
            height: 100%;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <!-- Container for the image gallery -->
    <div class="container-gallery">

        <!-- Full-width images with number text -->
        @foreach($countries as $country)
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $country->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
    @endforeach


    <!-- Next and previous buttons -->
        <a class="prev text-decoration-none" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next text-decoration-none" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <h1 id="caption"></h1>
        </div>

        <!-- Thumbnail images -->
        <div class="row no-gutters">
            @foreach($countries as $country)
                <div class="column">
                    <img class="demo cursor" src="{{ asset('store-public/' . $country->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide({{ $loop->index+1 }})" alt="{{ $country->name }}">
                </div>
            @endforeach
        </div>
    </div>
    {{-- intro countries--}}
    <div class="conntries mt-5 py-4">
        @foreach($countries as $country)
            <div class="contries-block my-5" id="{{ $country->id }}">
                <h2>{{ $country->name }}</h2>
                <div class="col-6 offset-3 ">
                    <p class="text-center text-secondary">
                        {{ $country->introduce }}
                    </p>
                </div>
                <hr>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($country->bridges as $bridge)
                            <div class="swiper-slide">
                                <a href="{{ route('bridge.detail', ['idCountry' => $country->id]) .  '/#' . $bridge->id }}" class="text-decoration-none">
                                    <div class="image-bridge">
                                        <img src="{{ asset('store-public/' . $bridge->photos[0]->name) }}" alt="{{ $bridge->name }}">
                                    </div>
                                    <div  class="text-bridge">{{ $bridge->name }}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('js')
    <script src="{{ asset('fontend/js/showgallery.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush
