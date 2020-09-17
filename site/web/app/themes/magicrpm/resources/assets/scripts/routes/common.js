const stickyHeader = require('./../util/common/stickyHeader.js')
const masonryPostsList = require('./../util/common/masonryPostsList.js')
const mobileMenu = require('./../util/common/mobileMenu.js')
const swiperStacked = require('./../util/common/swiperStaked.js')

export default {
  init() {
    // JavaScript to be fired on all pages
      stickyHeader,
      mobileMenu,
      swiperStacked,
      masonryPostsList
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
