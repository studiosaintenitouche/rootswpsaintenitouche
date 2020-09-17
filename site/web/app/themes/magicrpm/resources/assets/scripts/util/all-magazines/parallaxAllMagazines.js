import simpleParallax from 'simple-parallax-js/dist/simpleParallax.min.js';

$(document).ready(function () {
    var image1 = document.getElementsByClassName('all-magazines__go-back-title--img-1')[0];
    console.log(image1);
    new simpleParallax(image1, {
        orientation: 'right',
    });
});