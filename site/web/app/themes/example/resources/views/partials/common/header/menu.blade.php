@if(!empty(has_nav_menu('primary_navigation')) or !empty(has_nav_menu('mobile_navigation')))
    <div class="nav__menu">
        <span class="nav__menu-space-between-handler"></span>
        <div class="menu">
            <h1 class="menu__title">Menu</h1>
            @include('partials.common.header.menu.menu-primary')
            @include('partials.common.header.menu.menu-mobile')
            <div id="menu__toggle" class="menu__toggle menu__toggle--menu">
                <span class="menu__toggle-menu">
                    <span class="menu__toggle-menu-menu">menu</span>
                </div>
            </div>
        </div>
    </div>
@endif