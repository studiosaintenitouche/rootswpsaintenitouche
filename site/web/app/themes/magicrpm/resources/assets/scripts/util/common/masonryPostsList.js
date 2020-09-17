import Masonry from 'masonry-layout/dist/masonry.pkgd.min';
import imagesLoaded from 'imagesloaded/imagesloaded.pkgd.min';

$(document).ready(function () {
    /* eslint-disable */
    if ($(".posts-list--masonry").length != 0) {
        var grid = document.querySelector(".posts-list--masonry .posts-list__list");
        var msnry = new Masonry(grid, {
            itemSelector: ".posts-list__item",
            transitionDuration: "0.2s",
            stagger: 30,
            horizontalOrder: true,
    });

    imagesLoaded(grid).on("done", function () {
        // layout Masonry after each image loads
        msnry.layout();
        console.log("Image is now loaded");
    });
    }
});
