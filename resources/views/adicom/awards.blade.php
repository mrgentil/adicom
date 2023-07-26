@extends('layouts.main')

@section('title')
    @parent ADICOM AWARDS
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
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/img/eventum-img1.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Event Detail</h1>
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
                            <figure class="feature-image figure-round-border">
                                <div class="video-button">
                                    <a id="video-container" data-video-id="IUN664s7N-c">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </figure>
                            <div class="single-event-content-wrap">
                                <h4>
                                    DIGITAL MARKETING WORKSHOP
                                </h4>
                                <p>
                                    Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam. Veniam exercitationem? Phasellus? Officia pulvinar sem cumque? Quo? Unde natus, ducimus non illum facilisi voluptatem quisque.
                                </p>
                            </div>
                            <div class="author-comment">
                                    <span class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </span>
                                <p>
                                    "Mus delectus incidunt tincidunt, placerat nobis dolore maiores etiam porttitor! Quo auctor laudantium praesent eleifend.Quia dignissimos quidem lectus nulla. "
                                </p>
                            </div>
                            <div class="keypoint-inner">
                                <h5 class="title-divider">
                                    KEY POINT OF THIS SESSION
                                </h5>
                                <p class="key-point-desc">
                                    Massa amet tenetur error? Nostra duis illum bibendum asperiores lobortis, tortor exercitation risus nec? Arcu voluptatum. Anim consequatur? A ducimus? Elementum platea illo, class tempore. Iste laudantium ullam temporibus et.
                                </p>
                                <div class="key-point-list">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="item-list">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                Sales/Marketing Strategy
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                Search Marketing: SEO
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                Influencer Marketing
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
                                                                Email Marketing Research
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                Social Media Market
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        <span>
                                                                Share knowledge, ideas and skills
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
                                <h6 class="title-divider-center">EVENT SPEAKER</h6>
                                <div class="widget-content text-center">
                                    <div class="profile">
                                        <figure class="avatar">
                                            <img src="assets/img/eventum-img15.jpg" alt="">
                                        </figure>
                                        <div class="text-content">
                                            <h5 class="name-title">
                                                William HOBB
                                            </h5>
                                            <span class="profession">
                                                    Chief Executive Officer
                                                </span>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a target="_blank" href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://www.twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://www.pinterest.com/">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="event-info-package widget">
                                <h6 class="title-divider-center">EVENT INFORMATION</h6>
                                <div class="event-time-detail">
                                    <ul>
                                        <li>
                                            <i aria-hidden="true" class="far fa-calendar-alt"></i>
                                            February 23, 2022
                                        </li>
                                        <li>
                                            <i aria-hidden="true" class="far fa-clock"></i>
                                            Time : 15:00 - 17:00
                                        </li>
                                        <li>
                                            <i aria-hidden="true" class="far fa-building"></i>
                                            Auditorium, 2nd floor
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget extra-event">
                                <div class="overlay"></div>
                                <h6 class="title-divider-center">MORE EVENT SCHEDULE</h6>
                                <div class="event-list">
                                    <ul>
                                        <li>
                                            <h6>
                                                <a href="event-detail.html">BUSINESS MANAGEMENT INFO</a>
                                            </h6>
                                        </li>
                                        <li>
                                            <h6>
                                                <a href="event-detail.html">CULTURE OF CREATIVITY</a>
                                            </h6>
                                        </li>
                                        <li>
                                            <h6>
                                                <a href="event-detail.html">BEST MARKETING STRATEGIES</a>
                                            </h6>
                                        </li>
                                        <li>
                                            <h6>
                                                <a href="event-detail.html">BUSINESS MANAGEMENT INFO</a>
                                            </h6>
                                        </li>
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
