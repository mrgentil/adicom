@extends('layouts.main')

@section('title')
    @parent FAQ
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
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/Layer-45.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">FAQ</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq html start -->
        <div class="faq-page-section">
            <div class="container">
                <div class="faq-page-container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="section-head">
                                <span class="section-sub-title ">FAQ</span>
                                <h3 class="section-title">
                                    QUESTIONS GLOBALES!!
                                </h3>
                                <p class="section-paragraph">
                                    ADICOMDAYS
                                </p>
                            </div>
                            <div id="accordion-tab-one" class="accordion-content" role="tablist">
                                @foreach ($faqs as $faq)
                                <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A">
                                    <div class="card-header" role="tab" id="qus-A">
                                        <h6 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                                                {{ $faq->question }}
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse-one" class="collapse show" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A">
                                        <div class="card-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
