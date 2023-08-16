<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    {{--    <link rel="icon" type="image/png" href="{{asset('assets/logo.png')}}">--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css')}}">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/vendors/progressbar-fill-visible/css/progressBar.css')}}">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/jquery-ui/jquery-ui.min.css')}}">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/modal-video/modal-video.min.css')}}">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/fancybox/dist/jquery.fancybox.min.css')}}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/slick/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('cast/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('cast/css/responsive.css')}}">
    <!--video-->
    <link rel="stylesheet" href="{{asset('cast/css/magnific-popup.css')}}">
    <!--animation-->
    <link rel="stylesheet" href="{{asset('cast/css/animate.css')}}">
    <!--logo-->
    <link rel="icon" href="{{asset('assets/logo.png')}}" sizes="32x32">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">

    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@section('title') ADICOM @show"/>
    <meta property="og:description"
          content="Instagram Facebook Twitter BIENVENUE AU PREMIER RENDEZ-VOUS DE LA CRÉATIVITÉ DIGITALE AFRICAINE Portée par Totem Experience, la 6e édition des ADICOMDAYS (Africa Digital Communication) réunira une nouvelle fois les acteurs clés de la communication digitale africaine (marques, influenceurs et institutions). Après les trois rendez-vous de 2022, notre prochain rendez-vous est fixé : ADICOM WATCH, édition..."/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:site_name" content="@section('title') ADICOM @show"/>
    <meta property="og:image" content="@section ('meta-image'){{ asset('assets/logo.png') }}@show"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="author" content="Tshitsho Bedi"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
    <link href="{{ asset('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link id="default-css" rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all"/>

    <link href="{{asset('css/animations.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link id="shortcodes-css" href="{{asset('css/shortcodes.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link id="skin-css" href="{{asset('skins/red/style.css')}}" rel="stylesheet" media="all"/>
    <link href="{{asset('css/isotope.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/pace.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" media="all"/>
    <script src="{{asset('js/modernizr.js')}}"></script>


    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css"/>

    <title>@section('title') ADICOM @show</title>

</head>

<body class="home">
<div id="siteLoader" class="site-loader ">
    <div class="preloader-content">
        <img src="{{asset('assets/img/loader1.gif')}}" alt="">
    </div>
</div>
<div id="page" class="full-page">
    @include('partials.header')
    @yield('content')
    <!-- footer part -->
    @include('partials.footer')
    <!-- back to top -->
    <a id="backTotop" href="#" class="to-top-icon">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- custom search field html -->
    <div class="header-search-form">
        <div class="container">
            <div class="header-search-container">
                <form class="search-form" role="search" method="get">
                    <input type="text" name="s" placeholder="Enter your text...">
                </form>
                <a href="#" class="search-close">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="{{ asset('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script>
    // Initialisez Fancybox
    $('[data-fancybox="gallery"]').fancybox({
        // Options personnalisées si nécessaire
    });
</script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendors/waypoint/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/vendors/progressbar-fill-visible/js/progressBar.min.js')}}"></script>
<script src="{{asset('assets/vendors/countdown-date-loop-counter/loopcounter.js')}}"></script>
<script src="{{asset('assets/vendors/counterup/jquery.counterup.js')}}"></script>
<script src="{{asset('assets/vendors/modal-video/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('assets/vendors/masonry/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/vendors/slick-nav/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>(function () {
        var js = "window['__CF$cv$params']={r:'7e4ae2e97dad055e',m:'Pn0XHrZ36vfZFT8dQpDnoN7CQcdS_9neg4G5ZgnH7go-1689013915-0-Ad8GnokuqqaawJN/8QUiVfzOsK1N/kd2pWf5D0Cf5qY4'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/19b997cb/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.nonce = '';
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }

        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function () {
            };
            document.onreadystatechange = function (e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();</script>

<script src="{{asset('cast/js/jquery.min.js')}}"></script>
<script src="{{asset('cast/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('cast/js/music.js')}}"></script>
<script src="{{asset('cast/js/main.js')}}"></script>
<script src="{{asset('cast/js/shortcodes.js')}}"></script>
<!--animation-->
<script src="{{asset('cast/js/wow.min.js')}}"></script>
<script src="{{asset('cast/js/animation.js')}}"></script>
<!--owl.carousel-->
<script src="{{asset('cast/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('cast/js/owl.carousel2.thumbs.js')}}"></script>

<script src="{{asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.tabs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.perfectmasonry.min.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jsplugins.js')}}" type="text/javascript"></script>
<script src="{{asset('js/controlpanel.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom.js')}}"></script>
@stack('js')
</body>
</html>
