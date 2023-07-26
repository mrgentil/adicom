@extends('layouts.main')

@section('title') @parent Nous contacter @endsection

@section('description')
    {{ setting('site.description') }}
@endsection

@section('keywords')
    {{ setting('site.keywords') }}
@endsection

@section('meta-image')
    {{ Voyager::image(setting('site.logo')) }}
@endsection

@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/headercontact.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">CONTACTEZ-NOUS</h1>
                    </div>
                </div>
            </div>
        </section>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="contact-page-section">
            <div class="container">
                <div class="contact-form-inner">
                    <div class="col-md-10 offset-md-1">
                        <div class="contact-from-wrap">
                            <form action="{{route('contact.store')}}" method="post" class="contact-from row">
                                @csrf
                                <div class="col-sm-6 @error('name') is-invalid @enderror">
                                    <input id="name"  value="{{ old('name')  }}" type="text" name="name" placeholder="Nom..">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="email"  value="{{ old('email')  }}" type="email" name="email" placeholder="Email..">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="phone"  value="{{ old('phone')  }}" type="tel" name="phone" placeholder="Téléphone..">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="subject"  value="{{ old('subject')  }}" type="text" name="subject" placeholder="Sujet..">
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="contenu" rows="8" placeholder="Message..">{{ old('contenu')  }}</textarea>
                                    @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" name="submit" class="submit-btn" value="Envoyer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="300" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
@endsection
