@extends('frontend.layout')
@section('content')
    <!-- navbar -->
    <div id="topbar" class="pt8 pb8">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        @forelse($logos as $val)
                            @if($val->is_current === 1)
                                <img src="{{asset('assets/img/logo/'.$val->image)}}" style="object-fit:fill;width:300px;heigth:90px" alt="">
                            @endif
                        @empty
                        <img src="https://via.placeholder.com/300x90" alt="">
                        @endforelse
                    </div>
                </div>
                <div class="col-9">
                    <ul class="topbarinfo">
                        <li>
                            <div class="" id="desktop-cart">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>My Cart</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="" data-bs-toggle="modal" data-bs-target="#logIn">
                                <i class="fa fa-user"></i>
                                <span>Log In</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    
    <!-- banner -->
    <div class="banner position-relative">
        <div class="swiper-container swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('./images/banners/slider-3.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- banner -->
    <main>
        <!-- Products -->
        <div class="pt40">
            <div class="container">
                <h2 class="text-center mb-4"><strong>Electronics</strong></h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-13-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Travel Bag
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 2400</del>
                                        <ins>Nrs. 1850</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-1-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Stylish Sunglasses
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 1250</del>
                                        <ins>Nrs. 990</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-11-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Red Skirt Belt
                                    </p>
                                    <p class="price">
                                        <ins>Nrs. 250</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-3-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Leather Purse
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 960</del>
                                        <ins>Nrs. 850</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-16-front.jpg')}}" class=" img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Luxurious Perfume
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 1350</del>
                                        <ins>Nrs. 1250</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/16-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Black Dress
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 5355</del>
                                        <ins>Nrs. 4755</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-6-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Zergz Smart Watch 2
                                    </p>
                                    <p class="price">
                                        <ins>Nrs. 9720</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/13-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Stylish Blazer
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 4500</del>
                                        <ins>Nrs. 3750</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="pt40">
            <div class="container">
                <h2 class="text-center mb-4"><strong>Electronics</strong> <small> - Mobile Phones</small></h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-13-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Travel Bag
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 2400</del>
                                        <ins>Nrs. 1850</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-1-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Stylish Sunglasses
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 1250</del>
                                        <ins>Nrs. 990</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-11-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Red Skirt Belt
                                    </p>
                                    <p class="price">
                                        <ins>Nrs. 250</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-3-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Leather Purse
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 960</del>
                                        <ins>Nrs. 850</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-6-front.jpg')}}" class=" img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Luxurious Perfume
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 1350</del>
                                        <ins>Nrs. 1250</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="./images/products/theme1/16-front.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Black Dress
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 5355</del>
                                        <ins>Nrs. 4755</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/acc-6-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Zergz Smart Watch 2
                                    </p>
                                    <p class="price">
                                        <ins>Nrs. 9720</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-wrapper-main theme-2">
                                <div class="product-image">
                                    <img src="{{asset('./images/products/theme1/13-front.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="product-details">
                                    <p class="product-title">
                                        Men's Stylish Blazer
                                    </p>
                                    <p class="price">
                                        <del>Nrs. 4500</del>
                                        <ins>Nrs. 3750</ins>
                                    </p>
                                    <p>
                                        <a href="" class="main-button " data-bs-toggle="modal"
                                            data-bs-target="#addToCart">Add To Cart <i class="fa fa-plus"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <!-- map -->
        <div class="map-wrapper">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31397712412!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1672746796918!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- map -->


    </main>
@endsection