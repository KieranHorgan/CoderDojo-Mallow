$(".openNav").click(function () {

  $(this).toggleClass("opened");
  $(this).siblings().toggleClass("clicked");

  resetPage();

});

var resetPage = function () {

  if (Modernizr.mq('(max-width: 600px)')) {
    
    $("#sessionsMain").outerWidth("auto");

  } else {
    
    $("#sessionsMain").outerWidth(Math.floor($(".articleFull").outerWidth() - $("#sessionsNav").outerWidth()) - 10);

  }


}

$(document).ready(resetPage);
$(window).resize(resetPage);