<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="">
    <!-- Mobile Metas -->
    <meta name="description" content="">
    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        :root {
            --primary-color: #1b489b;
            --secondary-color: #8f2a2a;
            --title-color: #0a1031;
            --body-color: #140901;

            /* Do not change these */
            --white: #FEFEFE;
            --gray: #E7E7E7;
            --lightBg: #fafafa;
            /* Do not change these */

            --title-font: 'Hanken Grotesk', sans-serif;
            --body-font: 'Hanken Grotesk', sans-serif;

            --blue: #1b489b;
            --blueDark: #133168;
            --red: #8f2a2a;
            --white: #FEFEFE;
            --black: #140901;
            --gray: #E7E7E7;
            --lightBg: #fafafa;
            --font: 'Hanken Grotesk', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spacing.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body class="layout-2">
    @yield('content')
    <!-- cart -->
    <div id="cart">
        <div class="container-fluid">
            <div class="cart-title">
                <h4>My Cart</h4>
                <a href="javascript:void();">
                    <i class="fa fa-times"></i>
                </a>
                <hr>
            </div>
        </div>
        <div class="cart-wrapper">
            <div class="cart-item-wrapper">
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
                <div class="cart-item">
                    <div class="cart-image-wrapper">
                        <a href="javascript:void(0);">
                            <i class="fa fa-times"></i>
                        </a>
                        <img src="{{asset('./images/products/home-9/product-1.jpg')}}" alt="">
                    </div>
                    <div class="cart-details">
                        <p class="cart-title">
                            Orange T-shirt
                        </p>
                        <p class="cart-price">
                            Nrs. 900
                        </p>
                        <div class="cart-extra">
                            <p>Size: <span>XS</span></p>
                            <p>Color: <span class="cart-color" style="background-color:red;"></span></p>
                        </div>
                        <div class="increase-decrease">
                            <button type="button" class="decrease">-</button>
                            <input type="number" class="number-change text-base w-24" value="1">
                            <button type="button" class="increase">+</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="cart-bottom">
                <a href="#" id="check-out" class="main-button add-to-cart">Checkout <i
                        class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- cart -->
    <!-- checkout -->
    <div id="checkout">
        <div class="checkout-wrapper">
            <div class="container-fluid">
                <h5>CheckOut <span id="close-checkout"><i class="fa fa-times"></i></span> <small>Confirm Your
                        Details</small></h5>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">

                            <div class="col-sm-12">
                                <div id="delivery-form">
                                    <form action="">
                                        <div class="input-groups">
                                            <label for="" class="d-block">Enter Reciever's name</label>
                                            <input type="text" placeholder="Eg: John  Doe" class="form-control">
                                        </div>
                                        <div class="input-groups">
                                            <label for="" class="d-block">Enter Reciever's name</label>
                                            <input type="text" placeholder="Eg: John  Doe" class="form-control">
                                        </div>
                                        <div class="input-groups">
                                            <label for="" class="d-block">Enter Reciever's Phone</label>
                                            <input type="text" placeholder="Eg: 9843000000" class="form-control">
                                        </div>
                                        <div class="input-groups">
                                            <label for="" class="d-block">Additional Notes</label>
                                            <textarea name="" class="form-control" id="" rows="4"></textarea>
                                        </div>
                                        <br>
                                        <button href="" class="main-button ">Checkout <i
                                                class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout -->

    <!-- Product Detail Modal -->
    <div class="modal fade" id="addToCart" tabindex="-1" aria-labelledby="addToCartLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addToCartLabel">Nike Air Jordans</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row align-items-start">
                            <div class="col-sm-6 for-m">
                                <div class="main-product-image">
                                    <img src="{{asset('./images/products/img-big.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="swiper-container overflow-hidden swiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-1.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-2.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-3.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-4.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-5.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-6.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-7.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide" data-img="./images/products/">
                                            <img src="{{asset('./images/products/home-9/product-8.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="product-main-title">
                                    Nike Air Jordans
                                </h3>
                                <p class="main-price">
                                    <del>NRs. 45000</del> <ins>Nrs. 39999</ins>
                                </p>
                                <p class="main-descriptions">
                                    Originally released in November 1993, the Air Jordan IX model was the first
                                    model released after
                                    Michael Jordan's retirement. Jordan never played an NBA season wearing these
                                    shoes. This model
                                    was inspired by baseball cleats that Jordan wore when playing minor-league
                                    baseball.

                                    Like the VII and VIII models, the Air Jordan IX featured an inner sock sleeve
                                    and nubuck
                                    accents. The sole featured different symbols and languages of different
                                    countries. The Air
                                    Jordan IX has been the shoe chosen to adorn Jordan's feet for his statue outside
                                    of the United
                                    Center in Chicago.
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="variant-wrapper">
                                            <p class="variant-title">
                                                Select Size
                                            </p>
                                            <div class="radio-group">
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="x-small"
                                                        name="size" value="x-small">
                                                    <label class="variant-label square-boxes" for="x-small">XS</label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="small"
                                                        name="size" value="small">
                                                    <label class="variant-label square-boxes" for="small">S</label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="medium"
                                                        name="size" value="medium">
                                                    <label class="variant-label square-boxes" for="medium">M</label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="large"
                                                        name="size" value="large">
                                                    <label class="variant-label square-boxes" for="large">L</label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="extralarge"
                                                        name="size" value="extralarge">
                                                    <label class="variant-label square-boxes"
                                                        for="extralarge">XL</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="variant-wrapper">
                                            <p class="variant-title">
                                                Select Color
                                            </p>
                                            <div class="radio-group">
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="color1"
                                                        name="color" value="color1">
                                                    <label class="variant-label color-boxes" for="color1"
                                                        style="background-color:red">
                                                        <i class="fas fa-check text-xs text-white"></i>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="color2"
                                                        name="color" value="color2">
                                                    <label class="variant-label color-boxes" for="color2"
                                                        style="background-color:midnightblue">
                                                        <i class="fas fa-check text-xs text-white"></i>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="variant-radio" hidden="" type="radio" id="color3"
                                                        name="color" value="color3">
                                                    <label class="variant-label color-boxes" for="color3"
                                                        style="background-color:green">
                                                        <i class="fas fa-check text-xs text-white"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-product-add">
                                    <div class="increase-decrease">
                                        <button type="button" class="decrease">-</button>
                                        <input type="number" class="number-change text-base w-24" value="1">
                                        <button type="button" class="increase">+</button>
                                    </div>
                                    <button type="button" class="main-button">Add To Cart <i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product Detail Modal -->

    <!-- login Modal -->
    <div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="logInLabel">Log In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="{{route('login')}}">
                        @csrf
                            <div class="input-groups">
                                <label for="email" class="d-block">Email Address</label>
                                <input type="email" placeholder="Eg: John  Doe" class="form-control" name="email" required>
                            
                            </div>
                            <div class="input-groups">
                                <label for="password" class="d-block">Password</label>
                                <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password" required>
                            
                            </div>
                            <button type="submit" class="main-button ">Log In <i class="fa fa-arrow-right"></i></button>
                        </form>
                        <br>
                        <p class="text-center">No Account Yet? <a href="" data-bs-toggle="modal"
                                data-bs-target="#signUp"><strong>Sign Up</strong></a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- login Modal -->

    <!-- Register Modal -->
    <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signUpLabel">Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="input-groups">
                                <label for="email" class="d-block">Email Address</label>
                                <input type="email" placeholder="Eg: John  Doe" class="form-control" name="email">   
                            </div>
                            <div class="input-groups">
                                <label for="" class="d-block">Phone Number</label>
                                <input type="text" placeholder="Eg: 9840000000" class="form-control" name="phone">                           
                            </div>
                            <div class="input-groups">
                                <label for="" class="d-block">Password</label>
                                <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password">                           
                            </div>
                            <div class="input-groups">
                                <label for="" class="d-block">Confirm password</label>
                                <input type="password" placeholder="Eg: John  Doe" class="form-control" name="password_confirmation">
                            </div>
                            <button type="submit" class="main-button ">Log In <i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Register Modal -->



    <!-- mobile footer -->
    <div id="mobile-footer">
        <div class="container">
            <div class="row">
                <div class="col-5" id="mobile-menu">
                    <i class="fa fa-bars"></i>
                    <span>Categories</span>
                </div>
                <div class="col-7" id="mobile-cart-trigger">
                    <div class="row">
                        <div class="col-6 text-center">
                            <i class="fa fa-shopping-cart"></i>
                            <span>My Cart</span>
                        </div>
                        <div class="col-6 text-right">
                            <span>Nrs. 1200</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- mobile footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"
        integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/jquery-equal-height.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script>
        $(window).on('load', function (event) {
            $('.theme-2').jQueryEqualHeight('.product-details .product-title');
            $('.theme-2').jQueryEqualHeight('.product-details');
        });

    </script>
    <script>
        toastr.options = 
        {
            "closeButton" : true,
            "progressBar" : true    
        }
        @if ($errors->has('email'))
            toastr.error("{{ $errors->first('email') }}")
        @endif

        @if ($errors->has('password'))
            toastr.error("{{ $errors->first('password') }}")
        @endif          
        @if(Session::has('success'))
            toastr.success("{{session('success')}}")
        @endif
        @if(Session::has('fail'))
            toastr.error("{{session('fail')}}")
        @endif    
    </script>    
    <script>
        toastr.options = 
        {
            "closeButton" : true,
            "progressBar" : true    
        }
        @if ($errors->has('email'))
            toastr.error("{{ $errors->first('email') }}")
        @endif
        @if ($errors->has('phone'))
            toastr.error("{{ $errors->first('phone') }}")
        @endif 
        @if ($errors->has('password'))
            toastr.error("{{ $errors->first('password') }}")
        @endif          
        @if(Session::has('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
</body>

</html>