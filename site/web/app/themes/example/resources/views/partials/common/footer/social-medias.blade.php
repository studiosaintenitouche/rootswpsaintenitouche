@if (!empty(get_option( 'facebook_url')))
    <div class="footer__menu footer__menu--social-medias">
        <div class="menu">
            <div class="menu__container">
                <span class="menu__title">Suivez-nous sur</span>
                <ul class="menu__list">
                    @if (!empty(get_option( 'linkedin_url')))
                        <li class="menu__item social-media social-media--Linkedin">
                            <a href="{{ get_option( 'linkedin_url' ) }}" class="social-media__link">LinkedIn</a>
                        </li>
                    @endif
                    @if (!empty(get_option( 'twitter_url')))
                        <li class="menu__item social-media social-media--Twitter">
                            <a href="{{ get_option( 'twitter_url' ) }}" class="social-media__link">Twitter</a>
                        </li>
                    @endif
                    @if (!empty(get_option( 'facebook_url')))
                        <li class="menu__item social-media social-media--Facebook">
                            <a href="{{ get_option( 'facebook_url' ) }}" class="social-media__link">Facebook</a>
                        </li>
                    @endif
                    @if (!empty(get_option( 'instagram_url')))
                        <li class="menu__item social-media social-media--Instagram">
                            <a href="{{ get_option( 'instagram_url' ) }}" class="social-media__link">Instagram</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
