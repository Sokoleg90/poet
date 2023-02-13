<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Poet in Ukraine</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="{{asset('plugins1/ionicons/ionicons.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('plugins1/animate-css/animate.css')}}">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="{{asset('plugins1/slider/slider.css')}}">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="{{asset('plugins1/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('plugins1/owl-carousel/owl.theme.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('plugins1/facncybox/jquery.fancybox.css')}}">
    <!-- template main css file -->
    <link rel="stylesheet" href="{{asset('css1/style.css')}}">
</head>
<body>


<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('ru.post.index')}}">Главная страница</a></li>
                    <li><a href="{{route('ua.post.index')}}">Вірші українською мовою</a></li>
                    <li><a href="{{route('ru.post.index')}}">Стихи на русском языке</a></li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
   ==================================================
       Global Page Section Start
   ================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Poet in Ukraine</h2><br>
                    <h3>Oleg Sokolovskiy</h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('ru.post.index')}}">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')
<!--
==================================================
Footer Section Start
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="col-md-8">
            <p class="copyright">© poet.in.ua, All Right Reserved.
            </p>
        </div>
    </div>
</footer> <!-- /#footer -->

<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="{{asset('plugins1/jQurey/jquery.min.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('plugins1/form-validation/jquery.form.js')}}"></script>
<script src="{{asset('plugins1/form-validation/jquery.validate.min.js')}}"></script>
<!-- owl carouserl js -->
<script src="{{asset('plugins1/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('plugins1/bootstrap/bootstrap.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('plugins1/wow-js/wow.min.js')}}"></script>
<!-- slider js -->
<script src="{{asset('plugins1/slider/slider.js')}}"></script>
<!-- Fancybox -->
<script src="{{asset('plugins1/facncybox/jquery.fancybox.js')}}"></script>
<!-- template main js -->
<script src="{{asset('js1/main.js')}}"></script>
</body>
</html>
