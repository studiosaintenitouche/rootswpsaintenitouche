{{--
  Template Name: Magazines
--}}

@extends('layouts.app')

@section('content')
@while (have_posts())
@php
setup_postdata(the_post());

    $category = get_the_category();
    $magazines = new WP_Query(
        array(
            'post_type' => 'magazines',
            'posts_per_page' => -1,
            'nopaging' => true,
            'no_found_rows' => true,
        )
    );
@endphp
  <div class="all-magazines">
    <div class="all-magazines__header" style="background-color: {{ the_field('current_magazine_bkg_color', get_option('page_on_front')) }}">
        <div class="container plr-container mzauto">
            <div class="all-magazines__header-container">
                <div class="all-magazines__presentation">
                    <div class="all-magazines__current-magazine">
                        <img src="{{ the_post_thumbnail_url() }}" class="all-magazines__current-magazine-image">
                    </div>
                    <div class="all-magazines__content">{{ the_content() }}</div>
                    <div class="all-magazines__presentation-buttons">
                        <a href="{{ the_field('current_magazine_btn_order_url', get_option('page_on_front')) }}" class="btn btn--bkg-black btn--arrow btn--arrow-white current-magazine__btn current-magazine__btn--order">{{ the_field('current_magazine_btn_order_txt', get_option('page_on_front')) }}</a>
                        <a href="{{ the_field('current_magazine_btn_subscribe_url', get_option('page_on_front')) }}" class="btn btn--bkg-white btn--arrow btn--arrow-black current-magazine__btn current-magazine__btn--subscribe">{{ the_field('current_magazine_btn_subscribe_txt', get_option('page_on_front')) }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-magazines__body">
        <div class="all-magazines__go-back-title">
            <img class="all-magazines__go-back-title--img-1" src="@asset('images/elements/floating-mag-01.png')">
            <img class="all-magazines__go-back-title--img-2" src="@asset('images/elements/floating-mag-02.png')">
            <img class="all-magazines__go-back-title--img-3" src="@asset('images/elements/floating-mag-03.png')">
            <img class="all-magazines__go-back-title--img-4" src="@asset('images/elements/floating-mag-04.png')">
            <img src="@asset('images/logo__magicrpm--white.svg')" class="all-magazines__go-back-title--logo">
            <div class="all-magazines__go-back-title--remontez">Remontez</div>
            <div class="all-magazines__go-back-title--le-temps">le temps</div>
            <div class="all-magazines__go-back-title--discover">Découvrez ou redécouvrez tous nos numéros</div>
            <div class="all-magazines__go-back-title--btn"></div>
        </div>
        <div class="all-magazines__sliders">
            <div class="all-magazines__sliders-buttons">
                <div class="all-magazines__sliders-btn all-magazines__sliders-btn--prev swiper-button-prev" id="swiper-nav--prev"></div>
                <div class="all-magazines__sliders-btn all-magazines__sliders-btn--next swiper-button-next" id="swiper-nav--next"></div>
            </div>
            <div class="all-magazines__sliders-container">
                <div class="all-magazines__slider--title-buy">
                    <div class="slider slider--title-buy">
                        <div class="slider__list swiper-wrapper">
                            @while ($magazines->have_posts()) @php $magazines->the_post() @endphp
                                <div class="slider__item swiper-slide">
                                    <div class="title-buy">
                                        <div class="title-buy__content">
                                            <div class="title-buy__title">{{ the_title() }}</div>
                                            <a href="{{ the_field('magazine_shop_url') }}" target="_blank" class="btn btn--bkg-white btn--arrow btn--arrow-black">Acheter ce numéro</a>
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                            @php wp_reset_postdata() @endphp
                        </div>
                    </div>
                </div>
                <div class="all-magazines__slider--covers">
                    <div class="slider slider--covers">
                        <div class="slider__list swiper-wrapper">
                            @while ($magazines->have_posts()) @php $magazines->the_post() @endphp
                                <div class="slider__item swiper-slide">
                                    <div class="cover">
                                        <div class="cover__content">
                                            <img data-src="{{ the_post_thumbnail_url() }}" class="swiper-lazy cover__image">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                            @php wp_reset_postdata() @endphp
                        </div>
                    </div>
                </div>
                <div class="all-magazines__slider--publication-date">
                    <div class="slider slider--publication-date">
                        <div class="slider__list swiper-wrapper">
                            @while ($magazines->have_posts()) @php $magazines->the_post() @endphp
                                <div class="slider__item swiper-slide">
                                    <div class="publication-date">
                                        <div class="publication-date__content">
                                            <div class="publication-date__month">{{ the_time('F') }}</div>
                                            <div class="publication-date__year">{{ the_time('Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                            @php wp_reset_postdata() @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  @endwhile
    @php wp_reset_postdata() @endphp
  @endsection