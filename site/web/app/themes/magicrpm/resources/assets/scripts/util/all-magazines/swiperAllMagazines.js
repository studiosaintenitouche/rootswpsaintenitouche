import Swiper from 'swiper/js/swiper.min.js';

$(document).ready(function () {
    /* eslint-disable */
    var btnNavPrev = document.getElementById('swiper-nav--prev');
    var btnNavNext = document.getElementById('swiper-nav--next');

    var swiperTitle = new Swiper('.slider--title-buy', {
        navigation: {
            nextEl: btnNavNext,
            prevEl: btnNavPrev,
        },
        slidesPerView: 1,
        allowTouchMove: false,
        speed: 0,
        initialSlide: 0,
    });

    var swiperCovers = new Swiper('.slider--covers', {
        effect: 'coverflow',
        navigation: {
            nextEl: btnNavNext,
            prevEl: btnNavPrev,
        },
        slidesPerView: 1.2,
        centeredSlides: true,
        allowTouchMove: false,
        preventClicksPropagation: true,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        preloadImages: false,
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 2,
            elementClass: "cover__image",
        },
        speed: 300,
        initialSlide: 0,
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 60,
            modifier: 1,
            slideShadows: false,
        },
        breakpoints: {
            880: {
                effect: 'coverflow',
                navigation: {
                    nextEl: btnNavNext,
                    prevEl: btnNavPrev,
                },
                direction: 'vertical',
                slidesPerView: 1.2,
                centeredSlides: true,
                allowTouchMove: false,
                preventClicksPropagation: true,
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                preloadImages: false,
                lazy: {
                    loadPrevNext: true,
                    loadPrevNextAmount: 2,
                    elementClass: "cover__image",
                },
                speed: 300,
                initialSlide: 0,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 100,
                    depth: 60,
                    modifier: 1,
                    slideShadows: false,
                },
            },
        }
    });

    var swiperDate = new Swiper('.slider--publication-date', {
        navigation: {
            nextEl: btnNavNext,
            prevEl: btnNavPrev,
        },
        slidesPerView: 1,
        allowTouchMove: false,
        speed: 0,
        initialSlide: 0,
    });

    swiperCovers.on('lazyImageReady', function () {
        this.update();
    });
});