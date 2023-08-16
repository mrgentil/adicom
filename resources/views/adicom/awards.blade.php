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
                        <div class="main-title animate" data-animation="pullDown" data-delay="100">
                            <h3> Gallery Detail </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        </div>
                        <section id="primary" class="content-full-width">
                            <article>
                                <div class="dt-sc-one-column column first">
                                    <div class="recent-gallery-container">
                                        <ul class="recent-gallery">
                                            <li><img src="images/service-carousel/img-1.jpg" alt="image"/></li>
                                            <li><img src="images/service-carousel/img-2.jpg" alt="image"/></li>
                                            <li><img src="images/service-carousel/img-3.jpg" alt="image"/></li>
                                            <li><img src="images/service-carousel/img-4.jpg" alt="image"/></li>
                                        </ul>
                                        <div id="bx-pager">
                                            <a href="#" data-slide-index="0"><img src="images/service-carousel/img-1.jpg"
                                                                                  alt="image"/></a>
                                            <a href="#" data-slide-index="1"><img src="images/service-carousel/img-2.jpg"
                                                                                  alt="image"/></a>
                                            <a href="#" data-slide-index="2"><img src="images/service-carousel/img-3.jpg"
                                                                                  alt="image"/></a>
                                            <a href="#" data-slide-index="3"><img src="images/service-carousel/img-4.jpg"
                                                                                  alt="image"/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dt-sc-hr-invisible-small"></div>
                                <div class="dt-sc-two-third column first animate" data-animation="fadeInLeft" data-delay="100">
                                    <h3>Live Free, Ride Hard</h3>
                                    <p> Red art sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                        ut laoreet dolore magna aliquam erat volutpat.Contrary to popular belief, Lorem Ipsum is
                                        not simply random text. It has roots in a piece of classical Latin literature from 45
                                        BC, making it over 2000 years old. Libero tempore, cum soluta nobis est eligendi optio
                                        cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                        assumenda. </p>
                                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. Nam libero tempore,
                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                        placeat facere possimus, omnis voluptas assumenda. Curabitur vulputate massa lorem. </p>
                                    <p> Morbi vitae rhoncus erat. Duis nec leo massa. Duis aute irure dolor in &nbsp;eprehenderit
                                        in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id
                                        est laborum.Ullum scripserit ut mea, eum ut recteque sententiae sadipscing, volumus ex
                                        vix. </p>
                                    <p> Red Art to a famous belief, Lorem Ipsum is not simply random text. Nam libero tempore,
                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                        placeat facere possimus, omnis voluptas assumenda. Curabitur vulputate massa lorem. </p>
                                </div>
                                <div class="dt-sc-one-third column animate" data-animation="fadeInRight" data-delay="100">
                                    <div class="dt-sc-project-details">
                                        <h5>Other Details</h5>
                                        <div class="enquiry-details">
                                            <p><i class="fa fa-cab"></i> 121 King St, Melbourne VIC 3, Australia </p>
                                            <p><i class="fa fa-mortar-board"></i> Stephen Jones</p>
                                            <p><i class="fa fa-wrench"></i> Crayons, Sketch, Scissors</p>
                                            <p><i class="fa fa-tags"></i> Arcrylic, Sculpture, Canvas</p>
                                            <p><i class="fa fa-globe"></i> <a href="#"> envato.com </a></p>
                                        </div>
                                        <h5>Social Sharing</h5>
                                        <ul class="type3 dt-sc-social-icons">
                                            <li class="twitter"><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li class="facebook"><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li class="google"><a href="#"> <i class="fa fa-google"></i> </a></li>
                                            <li class="dribbble"><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dt-sc-post-pagination">
                                    <a class="dt-sc-button small type3 with-icon prev-post" href="#">
                                        <span> Previous Post </span> <i class="fa fa-hand-o-left"> </i> </a>
                                    <a class="dt-sc-button small type3 with-icon next-post" href="#"><i
                                            class="fa fa-hand-o-right"> </i> <span> Next Post </span> </a>
                                </div>
                            </article>
                        </section>
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                    <div class="container">
                        <div class="main-title animate" data-animation="pullDown" data-delay="100">
                            <h3> Related Art </h3>
                        </div>
                    </div>
                    <div class="portfolio-fullwidth">
                        <div class="portfolio-grid">
                            <div class="dt-sc-portfolio-container isotope">
                                <div class="portfolio nature still-life dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-7.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-7.jpg"></a><span>5</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail.html">Stay single</a></h5>
                                                    <p>Make Way</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio people still-life dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-9.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-9.jpg"></a><span>15</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail-with-rhs.html">Stand Tall</a></h5>
                                                    <p>Hard to Settle!!</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio people still-life dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-1.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-1.jpg"></a><span>3</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail.html">Proposing Love</a></h5>
                                                    <p>Sample text here looks good</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio people nature still-life street dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-12.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-12.jpg"></a><span>12</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail-with-lhs.html">Born to Ride</a></h5>
                                                    <p>Cowboys are born, ain't made!</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio nature people street still-life dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-8.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-8.jpg"></a><span>12</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail-with-lhs.html">Born to Ride</a></h5>
                                                    <p>Cowboys are born, ain't made!</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio street nature people still-life dt-sc-one-fourth">
                                    <figure>
                                        <img src="images/portfolio-images/img-10.jpg" alt title>
                                        <figcaption>
                                            <div class="portfolio-detail">
                                                <div class="views">
                                                    <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]"
                                                       href="images/portfolio-images/img-10.jpg"></a><span>5</span>
                                                </div>
                                                <div class="portfolio-title">
                                                    <h5><a href="gallery-detail.html">Stay single</a></h5>
                                                    <p>Make Way</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer id="footer" class="animate" data-animation="fadeIn" data-delay="100">
                        <div class="container">
                            <div class="copyright">
                                <ul class="footer-links">
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                                <ul class="payment-options">
                                    <li><a href="#" class="fa fa-cc-amex"></a></li>
                                    <li><a href="#" class="fa fa-cc-mastercard"></a></li>
                                    <li><a href="#" class="fa fa-cc-visa"></a></li>
                                    <li><a href="#" class="fa fa-cc-discover"></a></li>
                                    <li><a href="#" class="fa fa-cc-paypal"></a></li>
                                </ul>
                                <p>© 2015 <a href="#">RED ART</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </footer>
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
                                Condimentum rerum exercitation accusamus fugit irure, malesuada. Omnis anim accusantium
                                dolorem dapibus, ex modi in quam eros voluptatum malesuada dicta, assumenda nulla
                                penatibus.
                            </p>
                        </div>
                        <div class="book-btn">
                            <a href="" class="button-round-primary">Votez</a>
                        </div>
                    </div>
                    <figure class="booking-banner-image">
                        <div class="pattern-overlay overlay-circle"></div>
                        <img src="{{asset('assets/img/eventum-img38.png')}}" alt="">
                    </figure>
                </div>
            </div>
        </section>
    </main>
@endsection




