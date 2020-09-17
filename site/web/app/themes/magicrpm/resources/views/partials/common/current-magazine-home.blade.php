<div class="current-magazine current-magazine--home" style="background-color: {{ $current_magazine_bkg_color }};">
    <div class="current-magazine__container">
        <div class="current-magazine__content">
            <div class="current-magazine__image-title">
                <img class="current-magazine__image" src="{{ $current_magazine_image }}">
                <div class="current-magazine__currently-on-sale-title">
                    <span class="current-magazine__currently-on-sale">Actuellement en vente</span>
                    <h2 class="current-magazine__title">{{ $current_magazine_title }}</h2>
                </div>
            </div>
            <p class="current-magazine__description">{{ $current_magazine_content }}</p>
            <div class="current-magazine__buttons">
                <a href="{{ $current_magazine_btn_order_url }}" class="btn btn--bkg-black btn--arrow btn--arrow-white current-magazine__btn current-magazine__btn--order">{{ $current_magazine_btn_order_txt }}</a>
                <a href="{{ $current_magazine_btn_subscribe_url }}" class="btn btn--bkg-white btn--arrow btn--arrow-black current-magazine__btn current-magazine__btn--subscribe">{{ $current_magazine_btn_subscribe_txt }}</a>
            </div>
        </div>
    </div>
</div>