<!DOCTYPE html>
<html lang="en">

    <head>

        @include('partials.head')
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
        <!-- Flat Icon -->
        <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon_xtrade.css') }}">
        <!-- Fancy Box -->
        <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
        <!-- Swiper Slider -->
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
        <!-- Odometer -->
        <link rel="stylesheet" href="{{ asset('frontend/css/odometer.css') }}">
        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    </head>

    <body>

        <!--==========================   Preloader Start  ==========================-->
        <x-layouts.guest.preloader />
        <!--==========================  Preloader End  ==========================-->

        <div class="wrapper">
            <!--==========================   Header Start  ==========================-->
            <x-layouts.guest.header />
            <!--==========================  Header End  ==========================-->
            <main>
                {{ $slot }}

                <!--==========================  Call-to-action Section Start  ==========================-->
                <x-layouts.guest.cta />
                <!--==========================  Call-to-action Section End  ==========================-->

            </main>

            <!-- ==================== Footer Start Here ==================== -->
            <x-layouts.guest.footer />
            <!-- ==================== Footer End Here ==================== -->
            
        </div>
        <x-layouts.guest.progress-wrap />

        <!-- Jquery js -->
        {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
        <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
        <!-- gsap Js -->
        <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ScrollTrigger.js') }}"></script>
        <!-- Bootstrap Bundle Js -->
        <script src="{{ asset('frontend/js/boostrap.bundle.min.js') }}"></script>
        <!-- Scroll Reveal Js -->
        <script src="{{ asset('frontend/js/scrollreveal.min.js') }}"></script>
        <!-- Swiper Bundle Js -->
        <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
        <!-- Fancy Box js -->
        <script src="{{ asset('frontend/js/fancybox.umd.js') }}"></script>
        <!-- Odometer js -->
        <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>

        <!-- main js -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>

</html>
