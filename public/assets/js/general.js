new WOW().init();
// MDB Lightbox Init
$(function () {
  $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
//Goto Top
$('.go-top').click(function(event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $("body").offset().top
  }, 500);
});
//End goto top


