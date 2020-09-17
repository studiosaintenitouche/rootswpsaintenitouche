(function menuMobile() {
    document.getElementById('menu__toggle').addEventListener('click', function () {
        $('body').toggleClass('menu-mobile--active');
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 880 && document.body.classList.contains('menu-mobile--active')) {
            document.body.classList.remove('menu-mobile--active');
        }
    });
}())