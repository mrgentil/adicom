@extends('layouts.main')

@section('title') @parent Editions : {{ $editions->title }} @endsection

{{--@section('description')--}}
{{--    {{ setting('site.description') }}--}}
{{--@endsection--}}

{{--@section('keywords')--}}
{{--    {{ setting('site.keywords') }}--}}
{{--@endsection--}}

{{--@section('meta-image')--}}
{{--    {{ Voyager::image(setting('site.logo')) }}--}}
{{--@endsection--}}

@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/header_test-1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{$editions->title}}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- event deatil html start-->
        <section class="event-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 primary">
                        <div class="right-sidebar">
                            <figure class="post-thumb">
                                <a href="{{ $editions->slug_link }}"><img src="{{ asset(Voyager::image($editions->image1)) }}" alt="{{ $editions->title }}"></a>
                            </figure>
                            <div class="single-event-content-wrap">
                                <h4>
                                    {{$editions->title}}
                                </h4>
                                <p>
                                    {{$editions->subject}}
                                </p>
                            </div>
                            <div class="keypoint-inner">
                                <div class="key-point-list">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="item-list">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->visitor}} Visiteurs
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->speakers_experts}} Intervenants & experts
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->panels_keynotes}} Panels & keynotes
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->exclusive_study}} Étude exclusive
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->influencers}} Influenceurs récompensés
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->day_of_meetings}} Journée de rendez-vous BtoB
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->connections}} Connections
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                +{{$editions->interaction_live}} Interactions durant le live
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                               +{{$editions->create_content}} Candidatures de créateurs de contenus
                                                            </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="item-list">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                              {{$editions->influencers}} Influenceurs récompensés
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->masterclass}} Masterclass
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->side_event}} Side Event avec Wil Aime
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->nationalities_represented}} Nationalités représentées
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->formations}} Apprenants sur 3 campus
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                +{{$editions->gust_vip}}  Invités VIP présents
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                +{{$editions->person_connected}} Personnes connectées sur le live
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                {{$editions->anniv_ceremonie}} Cérémonie anniversaire
                                                            </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 secondary">
                        <div class="sidebar">
                            <aside class="widget author_widget">
                                <div class="widget-content text-center">
                                    <div class="profile">
                                        <figure class="post-thumb">
                                            <a href="{{ asset(Voyager::image($editions->image2)) }}"><img src="{{ asset(Voyager::image($editions->image2)) }}" alt="{{ $editions->title }}"></a>
                                        </figure>
                                    </div>
                                </div>
                            </aside>
                            <aside class="event-info-package widget">
                                <h6 class="title-divider-center">EVENT INFORMATION</h6>
                                <div class="event-time-detail">
                                    <ul>
                                        <li>
                                            <i aria-hidden="true" class="far fa-calendar-alt"></i>
                                            {{$editions->formatted_created_at}}
                                        </li>

                                        <li>
                                            <i aria-hidden="true" class="far fa-building"></i>
                                            {{$editions->place}}
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget extra-event">
                                <div class="overlay"></div>
                                <h6 class="title-divider-center">3 Dernières Editions</h6>
                                <div class="event-list">
                                    <ul>
                                        @foreach($latest_events as $latest_event)
                                            <li>
                                                <h6>
                                                    <a href="{{ $latest_event->slug_link }}">{{$latest_event->title}}</a>
                                                </h6>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event detail html start -->
    </main>
@endsection
