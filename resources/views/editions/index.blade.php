@extends('layouts.main')

@section('title')
    @parent Nos Editions
@endsection

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
        <section class="inner-banner-wrap mb-0">
            <div class="inner-baner-container"
                 style="background-image: url({{asset('assets/img/header_test-1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Nos Editions</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <section class="event-schedule-section">
            <div class="container">
                @foreach($editions as $edition)
                    <div class="first-day-schedule">
                        <div class="week-title">
                            <h5>{{$edition->title}}</h5>
                        </div>
                        <div class="first-day-routine-content">
                            <div class="first-day-routine-detail">
                                <div class="time-content">
                                    <span class="first-day-time-detail">
                                        <span class="time-title">{{$edition->formatted_created_at}}</span>
                                        <span class="subject-title">{{$edition->place}}</span>
                                    </span>
                                    <div class="lecture-image">
                                        <figure class="author-img">
                                            <img src="{{asset(Voyager::image($edition->image1))}}"
                                                 alt="{{$edition->title}}">
                                        </figure>
                                        <figure class="author-img">
                                            <img src="{{asset(Voyager::image($edition->image2))}}"
                                                 alt="{{$edition->title}}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="first-day-routine-description">
                                    <h5 class="chapter-title">{{$edition->subject}}</h5>
                                    <span class="chapter-link">
                                        <a href="{{ $edition->slug_link }}">Voir plus..</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="post-navigation-wrap">
                <nav>
                    <ul class="pagination">
                        {{ $editions->links('pagination.bootstrap') }}
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Event Schedule html start -->

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
                </div>
            </div>
        </section>
        <!-- reservation and booking section -->
    </main>
@endsection



