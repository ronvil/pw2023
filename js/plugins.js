// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());


(function(sidr) {
  "use strict"

  sidr.new('#menu-toggle', {
    timing: 'ease-in-out',
    speed: 500,
    side: 'right',
    onOpen: function() {
      document.getElementById("menu-toggle").innerHTML = "<i class='fas fa-times'></i>";
    },
    onClose: function() {
      document.getElementById("menu-toggle").innerHTML = "<i class='fas fa-bars'></i>";
    },
  });

  window.onresize = function() {
    sidr.close('sidr');
  };

})(window.sidr);


const swiper = new Swiper('.swiper', {
  // Optional parameters
  slidesPerView: "auto",
  spaceBetween: 16,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});

const lightboxsearch = GLightbox({
  selector: '.search-toggle',
  height: 'auto',
  closeButton: true,
  skin: 'searchbar'
});