<div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
    <nav id="navigation" class="navigation d-none d-lg-inline-block">
        <ul>
            <li class="current-menu-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{url('/')}}">Accuiel</a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">ADICOM</a>
                <ul>
                    <li class="{{ Request::is('adicom-academy') ? 'active' : '' }}">
                        <a href="{{route('adicom.academie')}}">ADICOM ACADEMY </a>
                    </li>
                    <li class="{{ Request::is('adicom-awards') ? 'active' : '' }}">
                        <a href="{{route('adicom.awards')}}">ADICOM AWARDS</a>
                    </li>
                    <li class="{{ Request::is('adicom-forum') ? 'active' : '' }}">
                        <a href="{{route('adicom.forum')}}">ADICOM FORUM</a>
                    </li>
                    <li class="{{ Request::is('adicom-4-good') ? 'active' : '' }}">
                        <a href="{{route('adicom.good')}}">ADICOM 4 GOOD</a>
                    </li>
                    <li class="{{ Request::is('adicom-watch') ? 'active' : '' }}">
                        <a href="{{route('adicom.watch')}}">ADICOM WATCH</a>
                    </li>
                </ul>
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
    </nav>
    <div class="header-btn d-inline-block {{ Request::is('booking') ? 'active' : '' }}">
        <a href="{{route('booking.index')}}" class="button-round-primary">ACHETER BILLET</a>
    </div>
</div>
