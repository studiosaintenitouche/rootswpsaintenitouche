const stickyHeader = require('./../util/common/stickyHeader.js')

export default {
  init() {
    // JavaScript to be fired on all pages
    stickyHeader;
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
