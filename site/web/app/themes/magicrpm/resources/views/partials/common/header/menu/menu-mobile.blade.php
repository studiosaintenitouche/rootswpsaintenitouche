@if (has_nav_menu('mobile_navigation'))
    <div id="menu__toggle" class="menu__toggle menu__toggle--menu">
        <span class="menu__toggle-menu">
            <h2 class="menu__toggle-menu-menu">Menu mobile</h2>
        </span>
    </div>
    <div class="menu__mobile">
        {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'menu__list']) !!}
    </div>
@endif