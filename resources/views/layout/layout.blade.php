<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Home page | LookCare</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Magnific Popup -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/skin-lblue.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/ecommerce.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolutionslider_settings.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
</head>

<body class="style-14 index-2">
    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


    <!-- Start Loading -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h1 class="loader">Loading...</h1>
        </div>
    </section>
    <!-- End Loading  -->

  
    @include('layout.navbar')
    @yield('content')

    @include('layout.footer')

    <div class="container">

    </div>






    <!-- All script -->
    <script src="{{asset('js//vendor/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js//bootstrap.min.js')}}"></script>
    <script src="{{asset('js//smoothscroll.js')}}"></script>
    <!-- Scroll up js
============================================ -->
    <script src="{{asset('js//jquery.scrollUp.js')}}"></script>
    <script src="{{asset('js//menu.js')}}"></script>
    <!-- new collection section script -->
    <script src="{{asset('js//swiper/idangerous.swiper.min.js')}}"></script>
    <script src="{{asset('js//swiper/swiper.custom.js')}}"></script>


    <script src="{{asset('js//pluginse209.js?v=1.0.0')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{asset('js//jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('js//jquery.countdown.min.js')}}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('js//owl.carousel.min.js')}}"></script>
    <script src="{{asset('js//main.js')}}"></script>

    <script type="text/javascript">
        /* ************ */
        /* Owl Carousel */
        /* ************ */

        $(document).ready(function() {
            /* Owl carousel */
            $(".owl-carousel").owlCarousel({
                slideSpeed: 500,
                rewindSpeed: 1000,
                mouseDrag: true,
                stopOnHover: true
            });
            /* Own navigation */
            $(".owl-nav-prev").click(function() {
                $(this).parent().next(".owl-carousel").trigger('owl.prev');
            });
            $(".owl-nav-next").click(function() {
                $(this).parent().next(".owl-carousel").trigger('owl.next');
            });
        });


        /* Main Slider */
        $('.tp-banner0').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startWithSlide: 0,
            startwidth: 869,
            startheight: 500,
            hideThumbs: 10,
            hideTimerBar: "on",
            thumbWidth: 50,
            thumbHeight: 50,
            thumbAmount: 4,
            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
            keyboardNavigation: "off",
            navigationHAlign: "right",
            navigationVAlign: "bottom",
            navigationHOffset: 30,
            navigationVOffset: 30,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 50,
            soloArrowLeftVOffset: 8,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 50,
            soloArrowRightVOffset: 8,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner4",
            stopLoop: "on",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 500,
            hideAllCaptionAtLilmit: 500,
            videoJsPath: "rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });
    </script>


</body>


</html>