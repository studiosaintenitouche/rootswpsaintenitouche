const nav = document.querySelector('.nav');
const scrollDown = 'nav--scroll-down';
const scrollUp = 'nav--scroll-up';
const menuHidden = 'nav--hidden';
const menuSticky = 'nav--sticky';
let lastScroll = 0;
let scrollDownOrigin = 0;
let scrollUpOrigin = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll == 0) {
        nav.classList.remove(scrollDown);
        nav.classList.remove(scrollUp);
        nav.classList.remove(menuHidden);
        nav.classList.remove(menuSticky);
        return;
    }

    if (currentScroll > lastScroll) {
        if (currentScroll > 120) {
            // down
            if (!nav.classList.contains(scrollDown)) {
                scrollDownOrigin = currentScroll;
                nav.classList.remove(scrollUp);
            }

            if (currentScroll > (scrollDownOrigin + 300)) {
                nav.classList.remove(menuSticky);
                nav.classList.add(menuHidden);
            }

            if (!nav.classList.contains(scrollDown)) {
                nav.classList.add(scrollDown);
            }

        }

    } else if (currentScroll < lastScroll) {
        // up
        if (0 < currentScroll && currentScroll < 250) {
            nav.classList.remove(scrollUp);
            nav.classList.remove(menuSticky);
            nav.classList.remove(menuHidden);
        }
        if (250 < currentScroll && currentScroll < 500) {
            nav.classList.add(menuHidden);
            nav.classList.remove(menuSticky);
        }

        if (currentScroll > 500) {
            if (!nav.classList.contains(scrollUp)) {
                scrollUpOrigin = currentScroll;
                nav.classList.remove(scrollDown);
            }
            if (currentScroll < (scrollUpOrigin - 300)) {
                nav.classList.remove(menuHidden);
                nav.classList.add(menuSticky);
            }

            if (!nav.classList.contains(scrollUp)) {
                nav.classList.add(scrollUp);
            }
        }
    }
    lastScroll = currentScroll;
});