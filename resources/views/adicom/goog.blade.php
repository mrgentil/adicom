@extends('layouts.main')

@section('title')
    @parent ADICOM 4 GOOD
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
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/eventum-img1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">ADICOM FOR GOOD</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                @foreach($goods as $item)
                <figure class="single-feature-img figure-round-border">
                    <img src="{{$item->image}}" alt="">
                </figure>
                <div class="page-content">
                    <p>{!! $item->content !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
