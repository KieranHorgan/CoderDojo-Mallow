$(".openNav").click(function () {

  $(this).toggleClass("opened");
  $(this).siblings().toggleClass("clicked");

  resetPage();

});

var resetPage = function () {

  if (Modernizr.mq('(max-width: 600px)')) {
    
    $("#learnMain").outerWidth("auto");

  } else {
    
    $("#learnMain").outerWidth(Math.floor($(".articleFull").outerWidth() - $("#learnNav").outerWidth()) - 10);

  }
  
  $("h3").css("padding-left", $("p").css("padding-left"));


}

$(document).ready(resetPage);
$(window).resize(resetPage);