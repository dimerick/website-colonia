var i=0;
$(".submenu").click(function () {
  if(i==0){
    $(".submenu ul").css("display", "none");
    i++;
  }
  $(this).children("ul").slideToggle();
});
$("ul").click(function (p) {
  p.stopPropagation();
});
