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
                                        <h2 class="title-page white-color wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">ADICOM WATCH</h2>
                                        <div class="breadcrumbs">
                                            <ul class="fl-flex">
                                                <li>
                                                    <a href="{{url('/')}}" class="white-color wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">ACCUEIL</a>
                                                </li>
                                                <li class="breadcrumbs-inner">
                                                    <span class="trail-end white-color wpw fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">WATCH</span>
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
                                @foreach($watches as $podcast)
                                    <div class="col-lg-4 col-md-4 col-sx-12">
                                        <div class="box-latest-news wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="box-feature fl-rela fl-scale fl-st-2">
                                                <img src="{{$podcast->image}}" alt="image">
                                                <div class="box-icon-2">
                                                    <a href="{{$podcast->link}}" class="player-m play-pause-button"><i class="icon-playplay"></i></a>
                                                </div>
                                            </div>
                                            <div class="box-content fl-st-2">
                                                <p class=" category-2"><a href="{{$podcast->link}}" class="muted5-color">{{$podcast->category->name}}</a></p>
                                                <a href="{{$podcast->link}}" class="title-news ">{{$podcast->title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="post-navigation-wrap">
                                    <nav>
                                        <ul class="pagination">
                                            {{ $watches->links('pagination.bootstrap') }}
                                        </ul>
                                    </nav>
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


