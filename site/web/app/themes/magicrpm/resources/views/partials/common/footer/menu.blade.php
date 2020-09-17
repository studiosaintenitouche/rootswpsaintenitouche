@if (has_nav_menu('footer_navigation'))
    <div class="footer__menu">
        <div class="menu">
            <nav class="menu__footer" role="navigation" aria-label="Menu footer">
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'menu__list']) !!}
            </nav>
        </div>
    </div>
@endif