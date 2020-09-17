<div class="current-magazine current-magazine--sidebar" style="background-color: {{ the_field('current_magazine_bkg_color', get_option('page_on_front')) }};">
    <div class="current-magazine__container">
        <img class="current-magazine__image" src="{{ the_field('current_magazine_image',  get_option('page_on_front')) }}">
        <div class="current-magazine__content">
            <span class="current-magazine__currently-on-sale">Actuellement en vente</span>
            <h2 class="current-magazine__title">{{ the_field('current_magazine_title', get_option('page_on_front')) }}</h2>
            <div class="current-magazine__buttons">
                <a href="#" class="btn btn--bkg-black btn--arrow btn--arrow-white current-magazine__btn current-magazine__btn--order">{{ the_field('current_magazine_btn_order_txt', get_option('page_on_front')) }}</a>
                <a href="#" class="btn btn--bkg-white btn--arrow btn--arrow-black current-magazine__btn current-magazine__btn--subscribe">{{ the_field('current_magazine_btn_subscribe_txt', get_option('page_on_front')) }}</a>
            </div>
        </div>
    </div>
</div>