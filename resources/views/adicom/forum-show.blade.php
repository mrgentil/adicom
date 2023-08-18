@extends('layouts.main')

@section('title') @parent Forum : {{ $forums->name }} @endsection

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
                        <h1 class="inner-title">{{ $forums->name }}</h1>
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
                                            <img src="{{ $forums->image }}" alt="{{ $forums->name }}">
                                        </figure>
                                        <div class="text-content">
                                            <h5 class="name-title">
                                                {{ $forums->name }}
                                            </h5>
                                            <span class="profession">
                                                    {{ $forums->function }}
                                                </span>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                @if ($forums['facebook'])
                                                    <li><a href="{{ $forums['facebook'] }}" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                @endif

                                                @if ($forums['twitter'])
                                                    <li><a href="{{ $forums['twitter'] }}" target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                @endif

                                                @if ($forums['instagram'])
                                                    <li><a href="{{ $forums['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                @endif

                                                @if ($forums['linkedIn'])
                                                    <li><a href="{{ $forums['linkedIn'] }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
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
                                @if ($forums['biography'])
                                    <h5 class="title-divider">
                                        BIOGRAPHIE
                                    </h5>
                                    <p>
                                        {!! $forums['biography'] !!}
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
