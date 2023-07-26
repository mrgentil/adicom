@extends('layouts.main')

@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/eventum-img1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Liste Speakers</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- event deatil html start-->
        <!-- home event speaker section html start -->
        <section class="speaker-event-section">
            <div class="container">
                <div class="group-member">
                    <div class="row justify-content-center">
                        <h3 class="section-title">
                            SPEAKERS ET EXPERTS DES ÉDITIONS PRÉCÉDENTES
                        </h3>
                        @foreach($speakers as $speaker)
                            <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <a href="{{ $speaker->slug_link }}">
                                            <img src="{{ $speaker->image }}" alt="{{ $speaker->name }}">
                                        </a>
                                    </figure>
                                    <div class="team-member-info">
                                        <div class="team-content">
                                            <h5 class="author-name"><a
                                                    href="{{ $speaker->slug_link }}">{{$speaker->name}}</a></h5>
                                            <span class="author-prof">{{ Str::limit($speaker->function, 20) }}</span>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                @if ($speaker['facebook'])
                                                    <li><a href="{{ $speaker['facebook'] }}" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                @endif

                                                @if ($speaker['twitter'])
                                                    <li><a href="{{ $speaker['twitter'] }}" target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                @endif

                                                @if ($speaker['instagram'])
                                                    <li><a href="{{ $speaker['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                @endif

                                                @if ($speaker['linkedIn'])
                                                    <li><a href="{{ $speaker['linkedIn'] }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="post-navigation-wrap">
                        <nav>
                            <ul class="pagination">
                                {{ $speakers->links('pagination.bootstrap') }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- reservation and booking section -->
        <section class="reservation-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                        <span class="section-sub-title ">
                            PARTICIPEZ À L'ÉVÉNEMENT
                        </span>
                    <h3 class="section-title">
                        NE RATEZ PAS L'OCCASION, PRENEZ VOS BILLETS DÈS MAINTENANT !
                    </h3>
                </div>
                <div class="reservation-btn text-center">
                    <a href="https://myplace-events.com/fr" class="button-round-primary">RÉSERVER</a>
                </div>
            </div>
        </section>
    </main>
@endsection
