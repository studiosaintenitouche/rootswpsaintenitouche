@if (has_nav_menu('mobile_navigation'))
    <div class="menu__mobile">
        {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'menu__list']) !!}
    </div>
@endif