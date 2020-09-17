@if (!empty(get_option( 'facebook_url')))
    <div class="footer__menu footer__menu--social-medias">
        <div class="menu">
            <div class="menu__container">
                <span class="menu__title">Suivez-nous sur</span>
                <ul class="menu__list">
                    @if (!empty(get_option( 'facebook_url')))
                        <li class="menu__item social-media social-media--facebook">
                            <a href="{{ get_option( 'facebook_url' ) }}" target="_blank" class="social-media__link">
                                @include('partials.common.header.facebook-svg')
                            </a>
                        </li>
                    @endif
                    @if (!empty(get_option( 'twitter_url')))
                    <li class="menu__item social-media social-media--twitter">
                        <a href="{{ get_option( 'twitter_url' ) }}" target="_blank" class="social-media__link">
                            @include('partials.common.header.twitter-svg')
                        </a>
                    </li>
                    @endif
                    @if (!empty(get_option( 'instagram_url')))
                    <li class="menu__item social-media social-media--instagram">
                        <a href="{{ get_option( 'instagram_url' ) }}" class="social-media__link">
                            @include('partials.common.header.instagram-svg')
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
