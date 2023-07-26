<footer id="colophon" class="site-footer">
    <div class="footer-overlay overlay"></div>
    <div class="top-footer">
        <div class="container">
            <div class="row align-items-lg-center align-items-start">
                <div class="col-lg-4 col-sm-6">
                    <aside class="widget widget_text img-textwidget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{asset('assets/img/eventum4.png')}}" alt="logo"></a>
                        </div>
                        <div class="textwidget widget-text">
                            Besoin de plus d'informations ? N’hésitez pas à nous contacter par
                            mail ou sur les réseaux sociaux ADICOMDAYS :
                        </div>
                    </aside>
                    <div class="footer-social-links">
                        <ul>
                            <li>
                                <a href="https://web.facebook.com/AdicomDays?_rdc=1&_rdr" target="_blank">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/adicomdays" target="_blank">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/adicomdays/" target="_blank">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC3EJNtj43Kete9tz7Bsa1aQ" target="_blank">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <aside class="widget">
                        <h6 class="widget-title">Liens Rapides</h6>
                        <ul>
                            <li class="current-menu-item {{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{url('/')}}">Accuiel</a>
                            </li>
                            <li class="{{ Request::is('editions') ? 'active' : '' }}">
                                <a href="{{route('edition.index')}}">Editions</a>
                            </li>
                            <li class="{{ Request::is('medias') ? 'active' : '' }}">
                                <a href="{{route('media.index')}}">Médias</a>
                            </li>
                            <li class="{{ Request::is('faq') ? 'active' : '' }}">
                                <a href="{{route('faqs.index')}}">FAQ</a>
                            </li>
                            <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                                <a href="{{route('contact.index')}}">Contact</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-lg-4 col-sm-6">
                    <aside class="widget widget_text footer-join-us text-center">
                        <h6 class="widget-title">REJOIGNEZ NOTRE NEWSLETTER</h6>
                        <p class="textwidget">
                            Inscrivez-vous à notre lettre d'information pour recevoir les dernières nouvelles et mises à jour de notre part.
                        </p>
                        <form class="footer-form" action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Votre adresse e-mail" required>
                            <button class="button-round-primary">S'ABONNER</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-footer">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-7">
                    <div class="legal-list">
                        <ul>
                            <li> <a href="legal-notice.html">PRIVACY POLICY</a></li>
                            <li> <a href="contact.html">SUPPORT</a></li>
                            <li> <a href="term-and-condition.html">TERMS & CONDITION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="copy-right">Copyright &copy; {{date('Y')}} ADICOM DAYS. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
</footer>
