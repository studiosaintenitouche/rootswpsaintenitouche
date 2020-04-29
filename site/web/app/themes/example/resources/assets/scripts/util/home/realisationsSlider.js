import 'slick-carousel/slick/slick';

$(document).ready(function () {
    /* eslint-disable */
    var buttonPrev = document.getElementById('press-gallery__prev');
    var buttonNext = document.getElementById('press-gallery__next');
    $(".realisations__list").slick({
        slidesToShow: 5,
        prevArrow: buttonPrev,
        nextArrow: buttonNext,
        centerMode: true,
    });
});