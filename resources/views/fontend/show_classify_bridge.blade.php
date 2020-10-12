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
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $mostFamous[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $mostBeautiful[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $mostStrange[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $oldest[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $highest[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>
            <div class="mySlides">
                <img src="{{ asset('store-public/' . $longest[0]->photos[0]->name) }}" style="width:100%; height: 100%; max-height: 700px">
            </div>


    <!-- Next and previous buttons -->
        <a class="prev text-decoration-none" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next text-decoration-none" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <h1 id="caption"></h1>
        </div>

        <!-- Thumbnail images -->
        <div class="row no-gutters">
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $mostFamous[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(1)" alt="Most Famous">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $mostBeautiful[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(2)" alt="Most Beautiful">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $mostStrange[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(3)" alt="Most Strange">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $oldest[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(4)" alt="Oldest">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $highest[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(5)" alt="Highest">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{ asset('store-public/' . $longest[0]->photos[0]->name) }}" style="width:100%; height: 100%" onclick="currentSlide(6)" alt="Longest">
            </div>
        </div>
    </div>
    {{-- intro countries--}}
    <div class="conntries mt-5 py-4">
        {{-- Bridges of Famous --}}
        <div class="contries-block my-5">
            <h2>Most Famous</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu nổi tiếng nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($mostFamous as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Famous']) }}" class="text-decoration-none">
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
        {{-- Bridges of Strange --}}
        <div class="contries-block my-5">
            <h2>Most Strange</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu lạ nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($mostStrange as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Strange']) }}" class="text-decoration-none">
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
        {{-- Bridges of Beautiful --}}
        <div class="contries-block my-5">
            <h2>Most Beautiful</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu đẹp nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($mostBeautiful as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Beautiful']) }}" class="text-decoration-none">
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
        {{-- Bridges of Oldest --}}
        <div class="contries-block my-5">
            <h2>Oldest</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu lâu đời nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($oldest as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Oldest']) }}" class="text-decoration-none">
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
        {{-- Bridges of Highest --}}
        <div class="contries-block my-5">
            <h2>Highest</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu cao nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($highest as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Highest']) }}" class="text-decoration-none">
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
        {{-- Bridges of Longest --}}
        <div class="contries-block my-5">
            <h2>Longest</h2>
            <div class="col-6 offset-3 ">
                <p class="text-center text-secondary">
                    Top những cây cầu dài nhất
                </p>
            </div>
            <hr>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($longest as $bridge)
                        <div class="swiper-slide">
                            <a href="{{ route('bridge.detail', ['classify' => 'Longest']) }}" class="text-decoration-none">
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
