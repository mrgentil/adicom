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
        <section class="inner-banner-wrap mb-0">
            <div class="inner-baner-container"
                 style="background-image: url({{asset('assets/img/header_test-1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">ADICOM AWARDS</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing section html start -->
        <!-- home pricing section htm start -->
        <section class="home-pricing-section pricing-page-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <h3 class="section-title">
                        LE CONCOURS RÉCOMPENSANT LE MEILLEUR DE LA CRÉATIVITÉ DIGITALE AFRICAINETICKET !!
                    </h3>
                    <p class="section-paragraph">
                        ADICOMAWARDS est un temps fort de l’évènement ADICOMDAYS qui
                        récompense depuis maintenant 4 éditions le meilleur de la créativité
                        digitale en Afrique francophone. Depuis sa première édition en 2017,
                        le concours a récompensé 30 influenceurs dans différentes catégories
                        et a enregistré plus de 900 candidatures sur les 4 éditions.
                    </p>
                </div>
                <div id="main">
                    <div class="container">
                        <section id="primary" class="content-full-width">
                            <aside class="widget widget_categories">
                                <div class="section-title">
                                    <h3> LES LAUREATS DES AUTRES EDITIONS </h3>
                                </div>
                                @foreach($awardGaleries as $galery)
                                    <ul>
                                        <li class="cat-item"><a title="#" href="{{ route('adicom.awards', ['categoryId' => $galery->category->id]) }}">{{ $galery->category->name }}<span> {{ count(json_decode($galery->images)) }}</span></a></li>
                                    </ul>
                                @endforeach
                            </aside>

                            @foreach($awardGaleries as $galery)
                                <article>
                                    <div class="dt-sc-one-column column first">
                                        @if ($selectedCategoryId == $galery->category->id)
                                            @if ($galery->images)
                                                <div class="recent-gallery-container">
                                                    <ul class="recent-gallery">
                                                        @foreach (json_decode($galery->images) as $image)
                                                            <li><img src="{{ Voyager::image($image) }}" alt="image"/></li>
                                                        @endforeach
                                                    </ul>
                                                    <div id="bx-pager">
                                                        @foreach (json_decode($galery->images) as $index => $image)
                                                            <a href="#" data-slide-index="{{ $index }}"><img src="{{ Voyager::image($image) }}" alt="image"/></a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @else
                                                <p>Aucune image disponible</p>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="dt-sc-hr-invisible-small"></div>
                                </article>
                            @endforeach
                        </section>
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                </div>
                <div class="pricing-table-inner">
                    <div class="container">
                        <div class="section-head text-center col-lg-8 offset-lg-2">
                            <h3 class="section-title">
                                LES PROCHAINS CANDIDATS  !!
                            </h3>
                        </div>
                    <div class="row align-items-center justify-content-center">
                        @foreach($award as $item)
                            <div class="col-lg-4 col-sm-6 ">
                                <div class="pricing-item">
                                    <div class="pricing-detail">
                                        <div class="pricing-head">
                                            <span class="pricing-title">{{ $item->name }}</span> <br><br>
                                            <div class="cost">
                                                <figure class="avatar">
                                                    <img src="{{ $item->image }}" alt="{{ $item->name }}">
                                                </figure>
                                            </div>
                                            <br><br>
                                            <p class="price-info">
                                                {{ $item->function }}
                                            </p>
                                            <span class="tax-info">{{ $item->votes }} Voie(s)</span>
                                        </div>

                                        <div class="ticket-btn">
                                            <form action="{{ route('adicom.vote') }}" method="POST">
                                                @csrf <!-- Ajoutez le jeton CSRF pour protéger votre formulaire -->
                                                <input type="hidden" name="candidate_id" value="{{ $item->id }}">
                                                <!-- Utilisez l'ID de l'award dans le champ caché -->
                                                <button type="submit" class="button-round-primary-transparent">Votez
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <figure class="bottom-figure">
                                        <img src="assets/img/eventum-img41.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection




