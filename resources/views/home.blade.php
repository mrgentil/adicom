@extends('layouts.main')

@section('content')
    <main id="content" class="site-main">
        <!-- home banner section html start -->
        <section class="home-banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="home-banner-inner">
                    @foreach($banners as $banner)
                    <div class="row align-items-center">
                        <div class="col-lg-6 banner-top-img">
                            <figure class="banner-image">
                                <div class="pattern-overlay overlay-circle"></div>
                                <img src="{{asset(Voyager::image($banner->image))}}" alt="{{$banner->title}}">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h3 class="banner-title">{{$banner->title}}</h3>
                                <span class="banner-title middle-title">{{$banner->sub_title1}}</span>
                                <h1 class="banner-title">{{$banner->sub_title2}}</h1>
                                <div class="banner-title-divider-center-white"></div>
                                <p class="banner-paragraph">
                                    {{$banner->text}}
                                </p>
                                <div class="banner-button">
                                    <a href="https://myplace-events.com/fr" class="button-round-primary">ACHETER BILLET</a>
{{--                                    <a href="{{route('schedule.index')}}" class="button-round-white-transparent">Voir le programme</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="bottom-shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
                </svg>
            </div>
        </section>
        <!-- home time counter section -->
        <div class="home-count-timmer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="time-counter-wrap">
                            <div class="time-counter" data-date="2023-12-24 23:58:58">
                                <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                                <div class="counter-time">
                                    <span class="counter-days">207</span>
                                    <span class="label-text">Days</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-hours">15</span>
                                    <span class="label-text">Hours</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-minutes">32</span>
                                    <span class="label-text">Minutes</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-seconds">53</span>
                                    <span class="label-text">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home about us section -->
        <section class="home-aboutus">
            <div class="container">
                <div class="home-aboutus-inner">
                    @foreach($abouts as $about)
                    <div class="about-gallary">
                        @if ($about->images)
                            <ul>
                                @foreach (json_decode($about->images) as $image)
                                    <figure class=" figure-round-border">
                                        <img src="{{Voyager::image($image)}}" alt="{{$about->title}}">
                                    </figure>
                                @endforeach
                            </ul>
                        @else
                            <p>Aucune image disponible</p>
                        @endif
                    </div>
                    <div class="home-about-right">
                        <div class="about-content">
                            <figure class="about-top-right-img figure-round-border">
                                <img src="{{asset('assets/img/eventum-img36.jpg')}}" alt="">
                            </figure>
                            <div class="section-head">
                                <span class="section-sub-title ">A propos</span>
                                <h3 class="section-title">
                                    {{$about->title}}
                                </h3>
                                <p class="section-paragraph">
                                    {!! $about->content !!}
                                </p>
                            </div>
                        </div>
                        <div class="about-detail">

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="home-about-place">
                    <div class="place-content">
                        <div class="place-icon">
                            <a href="event-detail.html">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            </a>
                        </div>
                        <div class="place-detail">
                            <h5 class="place-title">OÙ SE DÉROULE L'ÉVÉNEMENT :</h5>
                            <span class="place-discription">
                                    221B Baker Street, P.O Box 353 Park Road, San Francisco USA - 215431
                                </span>
                        </div>
                    </div>
                    <div class="place-content place-time">
                        <div class="place-icon">
                            <a href="event-detail.html">
                                <i aria-hidden="true" class="far fa-calendar-alt"></i>
                            </a>
                        </div>
                        <div class="place-detail">
                            <h5 class="place-title">QUAND A LIEU L'ÉVÉNEMENT :</h5>
                            <span class="place-discription">
                                    ( Sunday to Wednesday ) 20 January 2022 to 24 January 2022.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home progress section html start -->
        <div class="home-progress-section">
            <div class="container">
                <div class="counter-up-inner">
                    <div class="counter-item-wrap row">
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">220</span>+
                            </div>
                            <div class="Completed">
                                TOTAL JOURNALIST
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">35</span>+
                            </div>
                            <div class="Completed">
                                EVENT SPEAKERS
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">42</span>+
                            </div>
                            <div class="Completed">
                                EVENT SESSIONS
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">35</span>+
                            </div>
                            <span class="Completed">
                                    SPONSERS & PARTNERS
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home event section html start -->
        <section class="home-event-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-head-white text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">PARTICIPEZ À NOTRE ÉVÉNEMENT</span>
                    <h3 class="section-title">
                        POURQUOI PARTICIPER À NOTRE ÉVÉNEMENT ?
                    </h3>
                </div>
                <div class="type-of-event-wrap">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach($participations as $participation)
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="#">
                                        <i aria-hidden="true" class="{{$participation->icon}}"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                {{ str_pad($counter, 2, '0', STR_PAD_LEFT) }}.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    {{$participation->title}} </a>
                            </h5>
                            <p>{!! $participation->text !!}</p>
                        </div>
                    </div>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </section>
        <!-- home event aker section html start -->
        <section class="speaker-event-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">ADICOM SPEAKERS</span>
                    <h3 class="section-title">
                        NOS SPEAKERS
                    </h3>
                </div>spe
                <div class="group-member">
                    <div class="row justify-content-center">
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
                </div>
                <div class="event-speaker-btn">
                    <a href="{{route('speaker.index')}}" class="button-round-primary">VOIR TOUS LES INTERVENANTS</a>
                </div>
            </div>
        </section>
        <!-- home schedule section html start  -->
        
        <!-- home pricing section htm start -->
{{--        <section class="home-pricing-section">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="section-head-white text-center col-lg-8 offset-lg-2">--}}
{{--                    <h3 class="section-title">--}}
{{--                        NOS PARTENAIRES !!--}}
{{--                    </h3>--}}
{{--                    <p class="section-paragraph">--}}
{{--                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="pricing-table-inner">--}}
{{--                    <div class="row align-items-center justify-content-center">--}}
{{--                        <div class="col-lg-4 col-sm-6 ">--}}
{{--                            <div class="pricing-item">--}}
{{--                                <div class="pricing-detail">--}}
{{--                                    <div class="pricing-head">--}}
{{--                                        <span class="pricing-title">EARLY BIRD</span>--}}
{{--                                        <h2 class="cost">$25</h2>--}}
{{--                                        <p class="price-info">--}}
{{--                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.--}}
{{--                                        </p>--}}
{{--                                        <span class="tax-info">All prices exclude 25% VAT!</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="skill-container">--}}
{{--                                        <div class="skill-wrapper">--}}
{{--                                            <div class="progress-wrapper">--}}
{{--                                                <div class="ab-progress example" data-progress data-value="65%"></div>--}}
{{--                                            </div>--}}
{{--                                            <span class="skill-titile">( 325 / 500 ) Available seat</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ticket-btn">--}}
{{--                                        <a href="reservation.html" class="button-round-primary-transparent">BUY TICKET</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <figure class="bottom-figure">--}}
{{--                                    <img src="assets/img/eventum-img41.png" alt="">--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6 middle-price">--}}
{{--                            <div class="pricing-item">--}}
{{--                                <div class="discount-offer">--}}
{{--                                    <h6>EXCLUSIVE OFFER!</h6>--}}
{{--                                </div>--}}
{{--                                <div class="pricing-detail">--}}
{{--                                    <div class="pricing-head">--}}
{{--                                        <span class="pricing-title">GOLD</span>--}}
{{--                                        <h2 class="cost">$75</h2>--}}
{{--                                        <p class="price-info">--}}
{{--                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.--}}
{{--                                        </p>--}}
{{--                                        <span class="tax-info">All prices exclude 25% VAT!</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="skill-container">--}}
{{--                                        <div class="skill-wrapper">--}}
{{--                                            <div class="progress-wrapper">--}}
{{--                                                <div class="ab-progress example" data-progress data-value="80%"></div>--}}
{{--                                            </div>--}}
{{--                                            <span class="skill-titile">( 200 / 250 ) Available seat</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ticket-btn">--}}
{{--                                        <a href="reservation.html" class="button-round-primary">BUY TICKET</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <figure class="bottom-figure">--}}
{{--                                    <img src="assets/img/eventum-img41.png" alt="">--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-6">--}}
{{--                            <div class="pricing-item">--}}
{{--                                <div class="pricing-detail">--}}
{{--                                    <div class="pricing-head">--}}
{{--                                        <span class="pricing-title">PLATINUM</span>--}}
{{--                                        <h2 class="cost">$44</h2>--}}
{{--                                        <p class="price-info">--}}
{{--                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.--}}
{{--                                        </p>--}}
{{--                                        <span class="tax-info">All prices exclude 25% VAT!</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="skill-container">--}}
{{--                                        <div class="skill-wrapper">--}}
{{--                                            <div class="progress-wrapper">--}}
{{--                                                <div class="ab-progress example" data-progress data-value="65%"></div>--}}
{{--                                            </div>--}}
{{--                                            <span class="skill-titile">( 352 / 400 ) Available seat</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ticket-btn">--}}
{{--                                        <a href="reservation.html" class="button-round-primary-transparent">BUY TICKET</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <figure class="bottom-figure">--}}
{{--                                    <img src="assets/img/eventum-img41.png" alt="">--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- home gallery section html start -->
        <section class="home-gallery">
            <div class="container">
                @foreach($galeries as $galery)
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">EVENT GALLERY</span>
                            <h3 class="section-title">
                                {{$galery->title}}
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                {!! $galery->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gallery-container">
                    <div class="row grid">
                        @if ($galery->images)
                            @foreach (json_decode($galery->images) as $image)
                            <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                                <figure class="gallery-img">
                                    <a href="{{ Voyager::image($image) }}" data-fancybox="gallery">
                                        <img src="{{ Voyager::image($image) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            @endforeach
                        @else
                            <p>Aucune image disponible</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- home testimonial section html start -->
        <section class="home-testimonial">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">NOS TÉMOIGNAGES</span>
                    <h3 class="section-title">
                        CE QU'EN DISENT NOS VISITEURS ?
                    </h3>
                </div>
                <div class="row">
                    <div class="testimonial-slider">
                        @foreach ($testimonals as $testimonial)
                        <div class="client-content">
                            <figure class="client-img">
                                <img src="{{ Voyager::image($testimonial->image) }}" alt="{{$testimonial->name}}">
                            </figure>
                            <div class="client-detail">
                                <p class="client-txt">
                                    "{!! $testimonial->text !!}"
                                </p>
                                <h5 class="client-name">
                                    {{$testimonial->name}}
                                </h5>
                                <span class="client-prof">
                                        {{$testimonial->function}}
                                    </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- home partner section html start -->
        <section class="home-partner">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-head-white text-center col-lg-8 offset-lg-2">
                    <h3 class="section-title">
                        NOS PARTENAIRES
                    </h3>
                </div>
                <div class="inner-partner-wrapper">
                    @foreach($partners as $item)
                    <figure class="partner-logo">
                        <img src="{{Voyager::image($item->image)}}" alt="{{$item->image}}">
                    </figure>
                    @endforeach
                </div>
                <div class="sponser-btn">
                    <a href="{{route('contact.index')}}" class="button-round-primary">DEVENIR UN SPONSOR</a>
                </div>
            </div>
        </section>
        <!-- home-blog section-html start  -->
        <section class="home-blog-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">RECENT BLOG</span>
                    <h3 class="section-title">
                        A la une
                    </h3>
                </div>
                <div class="inner-blog-wrapper">
                    @foreach($medias as $media)
                        <article class="post">
                            <figure class="feature-image">
                                <img src="{{ $media->image }}" alt="{{$media->title}}">
                            </figure>
                            <div class="entry-content">
                                <h5>
                                    <a href="{{ $media->slug_link }}">{{$media->title}}</a>
                                </h5>
                                <div class="entry-meta">

                                            <span class="posted-on">
                                                    <a href="{{ $media->slug_link }}">{{ $media->formatted_created_at }}</a>
                                                </span>
                                    <span class="comment">
                                                    <a href="{{ $media->slug_link }}">{{ count($media->comments) }} Commentaires</a>
                                                </span>
                                </div>
                                <p class="blog-info">
                                    {{ Str::limit($media->excerpt, 80) }}
                                </p>
                                <span class="blog-link">
                                                <a href="{{ $media->slug_link }}">LIRE LA SUITE..</a>
                                            </span>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
