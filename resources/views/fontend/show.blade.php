@extends('fontend.layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/showgallery.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endpush

@section('content')
        <!-- Container for the image gallery -->
        <div class="container-gallery">

            <!-- Full-width images with number text -->
            <div class="mySlides">
                <img src="{{ asset('fontend/img/caurong.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ asset('fontend/img/220px-Tower_Bridge_at_Dawn.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ asset('fontend/img/caucongvang.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ asset('fontend/img/cayy.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ asset('fontend/img/cauduc.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ asset('fontend/img/cauchina.jpg') }}" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
                <h1 id="caption"></h1>
            </div>

            <!-- Thumbnail images -->
            <div class="row no-gutters">
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/caurong.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="Viet Nam">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/220px-Tower_Bridge_at_Dawn.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="ANH">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/caucongvang.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mỹ">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/cayy.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Italia">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/cauduc.jpg') }}" style="width:100%" onclick="currentSlide(5)" alt="Đức">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ asset('fontend/img/cauchina.jpg') }}" style="width:100%" onclick="currentSlide(6)" alt="Trung Quốc">
                </div>
            </div>
        </div>
        {{-- intro countries--}}
        <div class="conntries mt-5 py-4">
            <div class="contries-block my-5">
                <h2>Viet Nam</h2>
                <div class="col-6 offset-3 ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!</p>
                </div>
                <hr>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="contries-block my-5">
                <h2>Pháp</h2>
                <div class="col-6 offset-3">
                    <p class="text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!</p>
                </div>
                <hr>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="contries-block my-5">
                <h2>Anh</h2>
                <div class="col-6 offset-3">
                    <p class="text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!</p>
                </div>
                <hr>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="contries-block my-5">
                <h2>Đức</h2>
                <div class="col-6 offset-3">
                    <p class="text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!</p>
                </div>
                <hr>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none">
                                <div class="image-bridge">
                                    <img src="{{ asset('fontend/img/caurong.jpg') }}" alt="Can Tho Bridge">
                                </div>
                                <div  class="text-bridge">Can Tho Bridge</div>
                            </a>
                        </div>
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
