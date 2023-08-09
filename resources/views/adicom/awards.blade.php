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
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/header_test-1.jpg')}});">
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
                <div class="pricing-table-inner">
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
                                                <input type="hidden" name="candidate_id" value="{{ $item->id }}"> <!-- Utilisez l'ID de l'award dans le champ caché -->
                                                <button type="submit" class="button-round-primary-transparent">Votez</button>
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
        <section class="price-booking">
            <div class="container">
                <div class="book-content">
                    <div class="book-reason">
                        <div class="section-head">
                            <span class="section-sub-title ">BOOK A SEAT</span>
                            <h3 class="section-title">
                                DON'T MISS OUR CONFERENCE EVENT!
                            </h3>
                            <p class="section-paragraph">
                                Condimentum rerum exercitation accusamus fugit irure, malesuada. Omnis anim accusantium dolorem dapibus, ex modi in quam eros voluptatum malesuada dicta, assumenda nulla penatibus.
                            </p>
                        </div>
                        <div class="book-btn">
                            <a href="" class="button-round-primary">Votez</a>
                        </div>
                    </div>
                    <figure class="booking-banner-image">
                        <div class="pattern-overlay overlay-circle"></div>
                        <img src="assets/img/eventum-img38.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
    </main>
@endsection
