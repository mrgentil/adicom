@extends('layouts.main')

@section('title') @parent Speaker : {{ $speakers->name }} @endsection

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
                        <h1 class="inner-title">{{ $speakers->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- event deatil html start-->
        <!-- event speaker detail section html start -->
        <section class="speaker-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 secondary">
                        <div class="sidebar">
                            <aside class="author_widget">
                                <div class="widget-content text-center">
                                    <div class="profile">
                                        <figure class="avatar">
                                            <img src="{{ $speakers->image }}" alt="{{ $speakers->name }}">
                                        </figure>
                                        <div class="text-content">
                                            <h5 class="name-title">
                                                {{ $speakers->name }}
                                            </h5>
                                            <span class="profession">
                                                    {{ $speakers->function }}
                                                </span>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                @if ($speakers['facebook'])
                                                    <li><a href="{{ $speakers['facebook'] }}" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                @endif

                                                @if ($speakers['twitter'])
                                                    <li><a href="{{ $speakers['twitter'] }}" target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                @endif

                                                @if ($speakers['instagram'])
                                                    <li><a href="{{ $speakers['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                @endif

                                                @if ($speakers['linkedIn'])
                                                    <li><a href="{{ $speakers['linkedIn'] }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8 primary">
                        <div class="cv-container">
                            <div class="biography-wrapper">
                                @if ($speakers['biography'])
                                    <h5 class="title-divider">
                                        BIOGRAPHIE
                                    </h5>
                                    <p>
                                        {!! $speakers['biography'] !!}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
