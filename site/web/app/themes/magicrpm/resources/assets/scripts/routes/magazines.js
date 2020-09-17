
const swiperAllMagazines = require('./../util/all-magazines/swiperAllMagazines.js');
const parallaxAllMagazines = require('./../util/all-magazines/parallaxAllMagazines.js');

export default {
  init() {
    //
    swiperAllMagazines
  },
  finalize() {
    // JavaScript to be fired on the magazine page, after the init JS
    parallaxAllMagazines
  },
};
