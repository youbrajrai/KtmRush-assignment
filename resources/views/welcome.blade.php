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
    <!-- navbar -->
        @include('frontend.navbar')
    <!-- navbar -->
    <!-- banner -->
        @include('frontend.banner')
    <!-- banner -->
    <main>
        <!-- Products -->
        @include('frontend.product')
        <!-- Products -->
        <!-- map -->
        @include('frontend.map')
        <!-- map -->


    </main>
    <!-- cart -->
        @include('frontend.cart')
    <!-- cart -->
    <!-- checkout -->
        @include('frontend.checkout')
    <!-- checkout -->

    <!-- Product Detail Modal -->
        @include('frontend.productdetail')
    <!-- Product Detail Modal -->

    <!-- login Modal -->
        @include('frontend.login')
    <!-- login Modal -->

    <!-- Register Modal -->
        @include('frontend.register')
    <!-- Register Modal -->



    <!-- mobile footer -->
    @include('frontend.mobile-footer')
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
    @stack('login-success')
    @stack('register-success')
</body>

</html>