@extends('layouts.main')

@section('title') @parent Médias : {{ $medias->title }} @endsection

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
        <section class="inner-banner-wrap single-blog-inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/test3.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{$medias->title}}</h1>
                        <div class="entry-meta">
                                <span class="byline">
                                    <a href="blog-archive.html">
                                    @if ($medias->user)
                                            {{ $medias->user->name }}
                                        @else
                                            Aucun utilisateur associé
                                        @endif

                                    </a>
                                </span>
                            <span class="posted-on">
                                    <a href="#">{{$medias->formatted_created_at}}</a>
                                </span>
                            <span class="comments-link">
                                    <a href="#commentArea">{{ count($medias->comments) }} Commentaires</a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <section class="single-post-section">
            <div class="single-post-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary">
                            <div class="right-sidebar">
                                <!-- single blog post html start -->
                                <figure class="feature-image figure-round-border">
                                    <img src="{{$medias->image}}" alt="{{$medias->title}}">
                                </figure>
                                <div class="single-content-wrap">
                                    <p>
                                        {!! $medias->body !!}
                                    </p>
                                </div>
                                <div class="post-socail-wrap">
                                    <div class="social-icon-wrap">
                                        <div class="social-icon social-facebook">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($medias->url) }}" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-facebook"></i>
                                                <span>Facebook</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-whatsapp">
                                            <a href="whatsapp://send?text={{ urlencode($medias->url) }}" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-whatsapp"></i>
                                                <span>Whatsapp</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-twitter">
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode($medias->url) }}&text={{ urlencode($medias->title) }}" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-linkedin">
                                            <a href="https://www.linkedin.com/shareArticle?url={{ urlencode($medias->url) }}&title={{ urlencode($medias->title) }}" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-linkedin"></i>
                                                <span>Linkedin</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- divider line html -->
                                <div class="divider-line">
                                    <span class="st-line"></span>
                                </div>
                                <!-- post comment html -->
{{--                                <div id="commentArea" class="comment-area">--}}
{{--                                    <h2 class="comment-title">{{ count($medias->comments) }} Commentaires</h2>--}}
{{--                                    @foreach ($comments as $comment)--}}
{{--                                        <div class="comment">--}}
{{--                                            <p>{{ $comment->content }}</p>--}}
{{--                                            <p>Par : {{ $comment->user->name }}</p>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}

{{--                                    <div id="replyForm" class="comment-form-wrap">--}}
{{--                                        <h2 class="comment-title">Leave a Reply</h2>--}}
{{--                                        <p>Your email address will not be published. Required fields are marked *</p>--}}
{{--                                        <form action="{{ route('articles.comment.store', ['id' => $medias->id]) }}" method="POST" class="comment-form">--}}
{{--                                            @csrf--}}
{{--                                            <p class="full-width">--}}
{{--                                                <label>Comment*</label>--}}
{{--                                                <textarea name="comment" rows="9"></textarea>--}}
{{--                                            </p>--}}
{{--                                            <p class="full-width">--}}
{{--                                                <input type="submit" name="submit" value="Post comment">--}}
{{--                                            </p>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                    <!-- post navigation html -->--}}
{{--                                    <div class="post-navigation">--}}
{{--                                        <div class="nav-prev">--}}
{{--                                            <a href="single-blog.html">--}}
{{--                                                <span class="nav-label">Previous</span>--}}
{{--                                                <span class="nav-title">LEARNING TO TAKE YOUR LIFE INT0 YOUR OWN HANDS--}}
{{--                                                    </span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="nav-next">--}}
{{--                                            <a href="single-blog.html">--}}
{{--                                                <span class="nav-label">Next</span>--}}
{{--                                                <span class="nav-title">ICC WALES REPORTS RECORD BREAKING SUMMER</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- blog post item html end -->
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
                                        <h6 class="widget-title-divider-center-bottom">Médias en rélations</h6>
                                    </div>
                                    <ul>
                                        @foreach($related_medias as $item)
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
        </section>
    </main>
@endsection
