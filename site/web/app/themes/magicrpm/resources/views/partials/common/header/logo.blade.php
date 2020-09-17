<div class="nav__logo-social-medias">
    @if ( is_front_page() )
        <h1 class="nav__logo">
            <a class="nav__logo-link" href="{{ home_url('/') }}">
                @include('partials.common.header.logo-svg')
            </a>
        </h1>
    @else
        <div class="nav__logo">
            <a class="nav__logo-link" href="{{ home_url('/') }}">
                @include('partials.common.header.logo-svg')
            </a>
        </div>
    @endif
    @include('partials.common.header.menu.menu-social-medias')
</div>
