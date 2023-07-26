@extends('layouts.main')

@section('title')
    @parent Nos Médias
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
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/test3.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Médias</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="blog-archive-section">
            <div class="blog-archive-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary">
                            <div class="inner-blog-wrapper">
                                @foreach($medias as $media)
                                <article class="post">
                                    <figure class="feature-image">
                                        <img src="{{ $media->image }}" alt="{{$media->title}}">
                                    </figure>
                                    <div class="entry-content">
                                        <h5>
                                            <a href="{{ $media->slug_link }}">{{$media->title}}</a>
                                        </h5>
                                        <div class="entry-meta">

                                            <span class="posted-on">
                                                    <a href="{{ $media->slug_link }}">{{ $media->formatted_created_at }}</a>
                                                </span>
                                            <span class="comment">
                                                    <a href="{{ $media->slug_link }}">{{ count($media->comments) }} Commentaires</a>
                                                </span>
                                        </div>
                                        <p class="blog-info">
                                            {{ Str::limit($media->excerpt, 80) }}
                                        </p>
                                        <span class="blog-link">
                                                <a href="{{ $media->slug_link }}">LIRE LA SUITE..</a>
                                            </span>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                            <div class="post-navigation-wrap">
                                <nav>
                                    <ul class="pagination">
                                        {{ $medias->links('pagination.bootstrap') }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4 secondary">
                            <div class="sidebar">
                                <aside class="widget search-widget">
                                    <form class="search-form">
                                        <input type="text" name="search" placeholder="Search..">
                                        <button class="search-btn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </aside>
                                <aside class="widget author_widget">
                                    <h6 class="widget-title-divider-center-bottom">À PROPOS DE L'ORGANISATEUR</h6>
                                    <div class="widget-content text-center">
                                        <div class="profile">
                                            <figure class="avatar">
                                                <img src="{{asset('assets/img/thumb-organization-1663026283-LgqXo.png')}}" alt="">
                                            </figure>
                                            <div class="text-content">
                                                <h5 class="name-title">
                                                    Totem Experience
                                                </h5>
                                                <p class="author-info">
                                                    Créativité gigitale & storytelling au service des africans , pour un plus bel impact
                                                    auprès de leur communauté.
                                                </p>
                                            </div>
                                            <div class="social-icon">
                                                <ul>
                                                    <li>
                                                        <a target="_blank" href="https://web.facebook.com/Totemexperience/?_rdc=1&_rdr">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.linkedin.com/company/totem-experience/">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://twitter.com/totemfactory/">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.instagram.com/totemexperience/">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget_latest_post widget-post-thumb">
                                    <div class="text-center">
                                        <h6 class="widget-title-divider-center-bottom">Recent Médias</h6>
                                    </div>
                                    <ul>
                                        @foreach($latest_medias as $item)
                                            <li>
                                                <figure class="post-thumb">
                                                    <a href="{{ $item->slug_link }}"><img src="{{ $item->image }}" alt="{{ $item->title }}"></a>
                                                </figure>
                                                <div class="post-content">
                                                    <h6>
                                                        <a href="{{ $item->slug_link }}">{{$item->title}}</a>
                                                    </h6>
                                                    <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <a href="{{ $item->slug_link }}">{{ $item->formatted_created_at }}</a>
                                                        </span>
                                                        <span class="comments-link">
                                                            <a href="{{ $item->slug_link }}">{{ count($item->comments) }} Commentaires</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </aside>
                                <aside class="widget widget_video">
                                    <div class="text-center">
                                        <h6 class="widget-title-divider-center-bottom">A la une</h6>
                                    </div>
                                    <div class="video-wrapper">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4UvSbQ5gkKE" title="YouTube video player"
                                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                         gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


                                    </div>
                                </aside>
                                <aside class="widget widget_social">
                                    <div class="text-center">
                                        <h6 class="widget-title-divider-center-bottom">Suivez-nous sur</h6>
                                    </div>
                                    <div class="social-icon-wrap">
                                        <div class="social-icon ">
                                            <a href="https://web.facebook.com/AdicomDays?_rdc=1&_rdr">
                                                <i class="fab fa-facebook"></i>
                                                <span>Facebook</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-pinterest">
                                            <a href="https://www.instagram.com/adicomdays/">
                                                <i class="fab fa-instagram"></i>
                                                <span>Instagram</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-whatsapp">
                                            <a href="https://www.youtube.com/channel/UC3EJNtj43Kete9tz7Bsa1aQ">
                                                <i class="fab fa-youtube"></i>
                                                <span>Youtube</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-linkedin">
                                            <a href="https://www.linkedin.com/company/adicom-days/">
                                                <i class="fab fa-linkedin"></i>
                                                <span>Linkedin</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-twitter">
                                            <a href="https://twitter.com/adicomdays">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
