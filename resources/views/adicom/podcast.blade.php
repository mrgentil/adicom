@extends('layouts.main')

@section('content')
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">

                    <section class="page-title bg-st-4">
                        <div class="overlay-header"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="baner-title fl-st-3">
                                        <h2 class="title-page white-color wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">ADICOM, LE PODCAST</h2>
                                        <div class="breadcrumbs">
                                            <ul class="fl-flex">
                                                <li>
                                                    <a href="{{url('/')}}" class="white-color wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">ACCUEIL</a>
                                                </li>
                                                <li class="breadcrumbs-inner">
                                                    <span class="trail-end white-color wpw fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Podcast</span>
                                                </li>
                                            </ul>
                                        </div><!--/breadcrumbs-->
                                    </div><!--/baner-title-->
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="tf-latest-new fl-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="{{asset('cast/image/common/latest-new1.jpg')}}" alt="image">
                                            <div class="box-icon-2">
                                                <a href="https://youtu.be/usG2sH6Leac" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Motivation</a></p>
                                            <a href="podcast-play.html" class="title-news ">Starting A Podcast In 2021, Tips and Tricks</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="{{asset('cast/image/common/latest-new2.jpg')}}" alt="image">
                                            <div class="box-icon-2">
                                                <a href="#" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Lifestyle</a></p>
                                            <a href="podcast-play.html" class="title-news ">This is the perfect spot if you need peace</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="cast/image/common/latest-new3.jpg" alt="image">
                                            <div class="box-icon-2">
                                                <a href="#" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Motivation</a></p>
                                            <a href="podcast-play.html" class="title-news ">Polygonal shapes with red glow are cool</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="cast/image/common/latest-new1.jpg" alt="image">
                                            <div class="box-icon-2">
                                                <a href="#" class="player-m play-pause-button" ><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Motivation</a></p>
                                            <a href="podcast-play.html" class="title-news ">Starting A Podcast In 2021, Tips and Tricks</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="{{asset('cast/image/common/latest-new2.jpg')}}" alt="image">
                                            <div class="box-icon-2">
                                                <a href="#" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Lifestyle</a></p>
                                            <a href="podcast-play.html" class="title-news ">This is the perfect spot if you need peace</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sx-12">
                                    <div class="box-latest-news wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="box-feature fl-rela fl-scale fl-st-2">
                                            <img src="{{asset('cast/image/common/latest-new3.jpg')}}" alt="image">
                                            <div class="box-icon-2">
                                                <a href="#" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                            </div>
                                        </div>
                                        <div class="box-content fl-st-2">
                                            <p class=" category-2"><a href="podcast-play.html" class="muted5-color">Everyday Motivation</a></p>
                                            <a href="podcast-play.html" class="title-news ">Polygonal shapes with red glow are cool</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="themesflat-pagination-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <ul>
                                            <li class="custom">
                                                <a href="#" class="muted3-color"><i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <li><a href="#" class="page-numbers">01</a></li>
                                            <li><a href="#" class="page-numbers current">02</a></li>
                                            <li><a href="#" class="page-numbers">03</a></li>
                                            <li><a href="#" class="page-numbers">04</a></li>
                                            <li class="custom">
                                                <a href="#" class="muted3-color"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--.page-content-->
            </div>
            <!--#inner-content-->
        </div>
        <!--site-content-->
    </div>
@endsection
