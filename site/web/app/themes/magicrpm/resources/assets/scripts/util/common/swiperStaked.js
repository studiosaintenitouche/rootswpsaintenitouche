import Swiper from 'swiper/js/swiper.min.js';

$(document).ready(function () {
    /* eslint-disable */
    if ($('.stacked-posts__slider').length) {
        var swiperPost = new Swiper('.stacked-posts__slider', {
            grabCursor: true,
            slidesPerView: 1.3,
            loop: true,
            initialSlide: 0,
            slidesPerView: 'auto',
            centeredSlides: true,
            multipleActiveThumbs: true,
            breakpoints: {
                880: {
                    grabCursor: true,
                    slidesPerView: 3,
                    direction: 'vertical',
                    loop: true,
                    multipleActiveThumbs: true,
                    slideToClickedSlide: true,
                },
            }
        });

        var swiperCover = new Swiper('.stacked-covers__slider', {
            effect: 'coverflow',
            grabCursor: true,
            slidesPerView: 1.3,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            initialSlide: 0,
            controller: {
                control: swiperPost
            },
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
                    grabCursor: true,
                    slidesPerView: 1.3,
                    direction: 'vertical',
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    loop: true,
                    multipleActiveThumbs: true,
                    slideToClickedSlide: true,
                    controller: {
                        control: swiperPost
                    },
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

        swiperPost.controller.control = swiperCover;
    }
});