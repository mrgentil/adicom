<div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
    <nav id="navigation" class="navigation d-none d-lg-inline-block">
        <ul>
            <li>
                <a href="{{url('/')}}">Accuiel</a>
            </li>
            <li>
                <a href="#">ADICOM</a>
                <ul>
                    <li>
                        <a href="{{route('adicom.academie')}}">ADICOM ACADEMY </a>
                    </li>
                    <li>
                        <a href="{{route('adicom.awards')}}">ADICOM AWARDS</a>
                    </li>
                    <li>
                        <a href="{{route('adicom.forum')}}">ADICOM FORUM</a>
                    </li>
                    <li>
                        <a href="{{route('adicom.good')}}">ADICOM 4 GOOD</a>
                    </li>
                    <li>
                        <a href="{{route('adicom.watch')}}">ADICOM WATCH</a>
                    </li>
                    <li>
                        <a href="{{route('adicom.podcast')}}">ADICOM PODCAST</a>
                    </li>
                </ul>
            <li>
                <a href="{{route('edition.index')}}">Editions</a>
            </li>
            <li>
                <a href="{{route('media.index')}}">Médias</a>
            </li>
            <li>
                <a href="{{route('faqs.index')}}">FAQ</a>
            </li>
            <li>
                <a href="{{route('contact.index')}}">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="header-btn d-inline-block {{ Request::is('booking') ? 'active' : '' }}">
        <a href="{{route('booking.index')}}" class="button-round-primary">ACHETER BILLET</a>
    </div>
</div>
