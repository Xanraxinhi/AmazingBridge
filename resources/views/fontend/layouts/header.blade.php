<section class="menu-tour">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
            <div class="container">
                <div class="logo-header clearfix">
                    <a href="{{ route('index') }}" class="logo_1 logo">
                        <img class="img-fluid" src="{{ asset('fontend/img/TheBridgelogo.png') }}" alt="responsive image">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'link-quire' : '' }}">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('showCountryBridge') }}" class="nav-link {{ request()->routeIs('showCountryBridge') || !blank(Request::get('idCountry')) ? 'link-quire' : '' }}">Country</a>
                            <div class="sub-menu country clearfix">
                                <div class="row tab-wrap-img">
                                @foreach($countries as $country)
                                        <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['idCountry' => $country->id]) }}">
                                                <span>{{ $country->name }}</span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $country->photos[0]->name) }}" alt="{{ $country->name }}">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('showClassifyBridge') }}" class="nav-link {{ request()->routeIs('showClassifyBridge') || !blank(Request::get('classify'))? 'link-quire' : '' }}">CLASSIFY</a>
                            <div class="sub-menu country clearfix">
                                <div class="row tab-wrap-img">
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Famous']) }}">
                                                <span>Nổi Tiếng Nhất</span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $mostFamous[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Beautiful']) }}">
                                                <span>Đẹp nhất</span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $mostBeautiful[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Strange']) }}">
                                                <span>Độc Nhất</span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $mostStrange[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Oldest']) }}">
                                                <span>Cổ Nhất </span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $oldest[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Highest']) }}">
                                                <span>Cao Nhất</span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $highest[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5ths">
                                        <div class="img-overlay-black tab-img">
                                            <a href="{{ route('bridge.detail', ['classify' => 'Longest']) }}">
                                                <span>Dài Nhất </span>
                                                <img class="img-fluid" src="{{ asset('store-public/' . $longest[0]->photos[0]->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
{{--                        <li class="nav-item ">--}}
{{--                            <a href="javascript:void(0);" class="nav-link">About Us</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a href="javascript:void(0);" class="nav-link">CONTACT</a>--}}
{{--                        <li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
