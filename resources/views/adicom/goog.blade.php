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
            <div class="inner-baner-container" style="background-image: url(assets/img/eventum-img1.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Single Page</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- single page section html start -->
        <div class="single-page-section">
            <div class="container">
                <figure class="single-feature-img figure-round-border">
                    <img src="assets/img/eventum-img8.jpg" alt="">
                </figure>
                <div class="page-content">
                    <p>Amet orci, nibh blanditiis tempor soluta bibendum, omnis dictumst eiusmod felis mollis porta molestiae, laborum fugiat, phasellus minim labore habitasse culpa dignissimos? Distinctio molestias! Incididunt pede nostra mollit quam quaerat voluptas similique accumsan quae accusantium aliqua illum faucibus amet voluptatum natoque sodales. Proident facilisis, atque impedit ullam recusandae ducimus quisquam faucibus dolorum nibh neque libero, laudantium harum labore facilis proident nec doloribus netus. Posuere accusamus nam repudiandae, tincidunt! Id doloribus tempus potenti adipiscing deleniti nemo! Vel, tortor eiusmod omnis molestie sint quisque mollitia molestiae et! Veniam mollitia adipisci, anim eligendi? Turpis laborum leo quisque eos! Suspen sectetuer proident ex nostrud, ratione.</p>
                    <p>Amet orci, nibh blanditiis tempor soluta bibendum, omnis dictumst eiusmod felis mollis porta molestiae, laborum fugiat, phasellus minim labore habitasse culpa dignissimos? Distinctio molestias! Incididunt pede nostra mollit quam quaerat voluptas similique accumsan quae accusantium aliqua illum faucibus amet voluptatum natoque sodales. Laboris justo dolorem deserunt consectetur ultricies tortor cum tenetur ducimus occaecati imperdiet enim mus ab arcu. Taciti euismod metpus!</p>
                    <ul>
                        <li>Purus sequi accusamus? Nibh aut perspiciatis, lorem lorem perspiciatis.</li>
                        <li>Dictum? Posuere cumque sed illum facilisis leo illum facilisis.</li>
                        <li>Neque officiis feugiat praesentium qui, aliqua hic commodo praesentium.</li>
                        <li>Asperiores irure class lobortis veritatis, alias sem lobortis veritatis.</li>
                        <li>Ipsum eros quaerat deserunt proin porttitor, fugit ultrices.</li>
                        <li>Volutpat, justo mollit ullamco sagittis duis enim labore, ullamcorper dicta</li>
                    </ul>
                    <p>Sequi sociis leo, interdum eos ipsa pharetra, unde fringilla erat vulputate litora nisl adipisicing primis consectetuer erat aliqua reprehenderit unde accusamus earum sollicitudin voluptatum wisi vulputate deleniti, accusamus, animi rutrum. Labore et! Odit, nunc nostra, excepturi dui netus, euismod pariatur? Proin vivamus diamlorem natoque reprehenderit vivamus diamlorem natpo.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
