@if ( is_front_page() )
    <h1 class="nav__logo">
        <a class="nav__logo-link" href="{{ home_url('/') }}">
            <img class="nav__logo-image nav__logo-image--desktop" src="@asset('images/logo__example.png')" alt="{{ get_bloginfo('name') }}">
        </a>
    </h1>
@else
    <div class="nav__logo">
        <a class="nav__logo-link" href="{{ home_url('/') }}">
            <img class="nav__logo-image nav__logo-image--desktop" src="@asset('images/logo__example.png')" alt="{{ get_bloginfo('name') }}">
        </a>
    </div>
@endif