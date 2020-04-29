@if (has_nav_menu('primary_navigation'))
    <nav class="menu__primary" role="navigation" aria-label="Menu principal">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu__list']) !!}
    </nav>
@endif