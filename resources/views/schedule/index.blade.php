@extends('layouts.main')

@section('title')
    @parent Programmes
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
            <div class="inner-baner-container" style="background-image: url(assets/img/eventum-img1.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Event Schedule</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <section class="event-schedule-section">
            <div class="container">
                <div class="first-day-schedule">
                    <div class="week-title">
                        <h5>DAY 1 (MONDAY) : 23RD FEBRUARY 2023</h5>
                    </div>
                    <div class="first-day-routine-content">
                        <div class="first-day-routine-detail">
                            <div class="time-content">
                                    <span class="first-day-time-detail">
                                        <span class="time-title">From 9:30 to 11:30</span>
                                        <span class="subject-title">BUSINESS LECTURE</span>
                                    </span>
                                <div class="lecture-image">
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img15.jpg" alt="">
                                    </figure>
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img16.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="first-day-routine-description">
                                <h5 class="chapter-title">BUSINESS MANAGEMENT INFO</h5>
                                <p class="ch-paragraph">
                                    Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                                </p>
                                <span class="chapter-link">
                                        <a href="event-detail.html">LEARN MORE..</a>
                                    </span>
                            </div>
                        </div>
                        <div class="first-day-routine-detail">
                            <div class="time-content">
                                    <span class="first-day-time-detail">
                                        <span class="time-title">From 12:00 to 01:30</span>
                                        <span class="subject-title">MARKET WORKSHOP</span>
                                    </span>
                                <div class="lecture-image">
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img15.jpg" alt="">
                                    </figure>
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img16.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="first-day-routine-description">
                                <h5 class="chapter-title">DIGITAL MARKETING WORKSHOP</h5>
                                <p class="ch-paragraph">
                                    Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                                </p>
                                <span class="chapter-link">
                                        <a href="event-detail.html">LEARN MORE..</a>
                                    </span>
                            </div>
                        </div>
                        <div class="first-day-routine-detail">
                            <div class="time-content">
                                    <span class="first-day-time-detail">
                                        <span class="time-title">From 3:00 to 04:00</span>
                                        <span class="subject-title">TEAM WORKSHOP</span>
                                    </span>
                                <div class="lecture-image">
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img15.jpg" alt="">
                                    </figure>
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img16.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="first-day-routine-description">
                                <h5 class="chapter-title">CULTURE OF CREATIVITY</h5>
                                <p class="ch-paragraph">
                                    Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                                </p>
                                <span class="chapter-link">
                                        <a href="event-detail.html">LEARN MORE..</a>
                                    </span>
                            </div>
                        </div>
                        <div class="first-day-routine-detail">
                            <div class="time-content">
                                    <span class="first-day-time-detail">
                                        <span class="time-title">From 4:30 to 06:00</span>
                                        <span class="subject-title">MARKETING THEORY</span>
                                    </span>
                                <div class="lecture-image">
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img15.jpg" alt="">
                                    </figure>
                                    <figure class="author-img">
                                        <img src="assets/img/eventum-img16.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="first-day-routine-description">
                                <h5 class="chapter-title">BEST MARKETING STRATEGIES</h5>
                                <p class="ch-paragraph">
                                    Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                                </p>
                                <span class="chapter-link">
                                        <a href="event-detail.html">LEARN MORE..</a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-day-routine-content">
                    <div class="week-title">
                        <h5>DAY 2 (TUESDAY) : 24th FEBRUARY 2023</h5>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 9:30 to 11:30</span>
                            <span class="subject-title">BUSINESS LECTURE</span>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">BUSINESS MANAGEMENT INFO</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img15.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img16.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 12:00 to 01:30</span>
                            <span class="subject-title">MARKET WORKSHOP</span>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">DIGITAL MARKETING WORKSHOP</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img11.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img12.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 3:00 to 04:00</span>
                            <span class="subject-title">TEAM WORKSHOP</span>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">CULTURE OF CREATIVITY</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img14.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img13.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Schedule html start -->
    </main>
@endsection
