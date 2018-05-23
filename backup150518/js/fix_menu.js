$(document).ready(function() {
  var a = $(".RBsticky-element"),
      f = $("#header"),
    e = a.offset().top,
    c = 0,
    d = function() {
      var b = $(window).scrollTop();

      if (b < window.innerHeight && window.innerWidth <= 992) {
        a.removeClass("RBSticky");
        a.css({'top': window.innerHeight - 109});
      } 

      if (b < f.innerHeight() - 109 && window.innerWidth > 992) {
          a.removeClass("RBSticky");
          a.css({'top': f.innerHeight() - 109})
      }

      if (b > f.innerHeight() - 109) {
          a.addClass("RBSticky");
          a.css({'top': '0px'})
      }
    };
  d();
  $(window).scroll(function() {
    d();
  });
  $(window).resize(function() {
    d();
  });
});
