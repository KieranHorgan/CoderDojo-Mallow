// Set up all the variables
var nav = $("nav"),
    navIcon = $("#navMenu"),
    content = $("#contentWrapper"),
    navDropdown = $("#navDropdown"),
    navDropdownList = $("#navDropdown ul li"),
    navDropdownLink = $("#navDropdown ul li a"),
    aside = $("aside"),
    article = $("article"),
    open = false,
    sliderInterval,
    sliderIntervalHasBeenStarted = false,
    isSliderPrepended = false;

// Remembers whether the user had the nav open or not
navIsOpen = sessionStorage.getItem("navIsOpen");

function navSetup() {

  //Declare all my variables
  var navWidth = $(nav).width(),
      navHeight = $(nav).height(),
      navDropdownWidth = $(navDropdown).width(),
      navDropdownHeight = $(navDropdown).height();
  
  // Uses Modernizr's Media Query function
  // If the screen is less than or equal to 600 pixels
  if (Modernizr.mq('(max-width: 600px)')) {

    // Set the nav dropdown to be under the main nav
    navDropdown.css({
      "top": (navHeight - navDropdownHeight) + "px"
    });

    // Adds padding so content starts just under the main nav
    content.css({
      "padding-top": navHeight + "px"
    });

    // Set the content wrapper to it's natural height
    contentWrap.css("height", "auto");

    // Red trangle on white background
     navDropdownLink.removeClass("whiteTri");

  // Or if the width is less than 1000 pixels
  } else if (Modernizr.mq('(max-width: 999px)')) {

    // Give the content no padding as the nav is relatively positioned
    content.css({
      "padding-top": "0"
    });
    
    // Set the nav dropdown to "top: 0" because it is "position: relative"
    navDropdown.css({
      "top": "0"
    });

    // Set the content wrapper to it's natural height
    contentWrap.css("height", "auto");
    
    // Red trangle on white background
    navDropdownLink.removeClass("whiteTri");

  // Or if greter than or equal to 1000
  } else {

    // Set the content to start under the main nav
    content.css({
      "padding-top": navHeight + "px"
    });

    // Put the nav dropdown inside the main nav
    navDropdown.css({
      "top": "0"
    });

    // White trangle on red background
    navDropdownLink.addClass("whiteTri");
  }
  
}

// When the hamburger menu is clicked
$('nav>.navMenu').click(function () {

  // Set the var clicked to true/false, depending on if the nav dropdown was open
  navIsOpen = sessionStorage.getItem("navIsOpen");

  // Because the hamburger menu was clicked or "toggled" we must toggle the variable "navIsOpen"
  if (navIsOpen == "true") {
    navIsOpen = false;
  } else {
    navIsOpen = true;
  }

  // Set the session storage item 
  sessionStorage.setItem("navIsOpen", navIsOpen);

  // Move the nav
  navDropdownMove();

});

function navDropdownMove() {

  //Declare all my variables
  var navWidth = $(nav).width(),
      navHeight = $(nav).height(),
      navDropdownWidth = $(navDropdown).width(),
      navDropdownHeight = $(navDropdown).height();

  // If the screen is small enough i.e. less than or equal to 600px
  if (Modernizr.mq('(max-width: 600px)')) {

    // If the nav dropdown is open
    if (navIsOpen) {

      // Set the nav dropdown to the bottom of the main nav
      navDropdown.css({
        "top": navHeight + "px"
      });
      
      // Set the content to the bottom of the nav dropdown
      content.css({
        "padding-top": navDropdownHeight + navHeight + "px"
      });

    } else {
      
      // Set the nav dropdown to under the main nav
       navDropdown.css({
        "top": (navHeight - navDropdownHeight) + "px"
      });
      
      // Set the content to the bottom of the main nav
      content.css({
        "padding-top": navHeight + "px"
      });

    }

  // Or if the screen is larger than 600 pixels
  } else {
      
      // Set the nav dropdown to where it would be without the css property "top"
      navDropdown.css({
        "top": "auto"
      });

      // If screen is less or equal to than 1000 pixels
      if (Modernizr.mq('(max-width: 1000px)')) {

        // No padding due to relative position
        content.css({
          "padding-top": "0"
        });

      } else {

        // Put content just under nav
        content.css({
          "padding-top": navHeight + "px"
        });
      }
  }

}

// Image Slider
function sliderSetup() {

  // Set width of the slides
  $("#slider ul li").css({
    width: $("article").width()
  });

  // Set variables for slider
  var slideCount = $('#slider ul li').length,
      slideWidth = $('#slider ul li').width(),
      slideHeight = $('#slider ul li').height(),
      sliderUlWidth = slideCount * slideWidth;

  // Make sure slider doesn't get bigger than 720px
  $('#slider').css({
    width: $("article").width(),
    "max-width": "720px"
  });
  
  // Make sure slides doesn't get bigger than 720px
  $("#slider ul li").css({
    width: $("article").width(),
    "max-width": "720px"
  });

  // Position and set the dimensions of the slider's ul
  $('#slider ul').css({
    height: slideHeight,
    width: sliderUlWidth,
    marginLeft: -slideWidth
  });

  // If the slider hasn't had the last slide put to the front
  if (!isSliderPrepended) {

    // Put the last slide to the front
    $('#slider ul li:last-child').prependTo('#slider ul');

    // Remember that it was prepended
    isSliderPrepended = true;

    // I put the click to move functions in this if statement because they should only be declared once, and this statement only runs the very first time
    // If the previous slide
    $('span.moveLeft').click(function () {
      moveLeft();

      // Clear interval and then set it again to make sure the slide doesn't move straight after the user goes onto it
      clearInterval(sliderInterval);
      sliderInterval = setInterval(moveRight, 7000);
    });

    $('span.moveRight').click(function () {
      moveRight();
      
      // Clear interval and then set it again to make sure the slide doesn't move straight after the user goes onto it
      clearInterval(sliderInterval);
      sliderInterval = setInterval(moveRight, 7000);
    });
  }

}

function moveLeft() {
  var slideWidth = $('#slider ul li').width();
  $('#slider ul').animate({
    left: +slideWidth
  }, 150, function () {
    $('#slider ul li:last-child').prependTo('#slider ul');
    $('#slider ul').css('left', '');
  });
};

function moveRight() {
  var slideWidth = $('#slider ul li').width();
  $('#slider ul').animate({
    left: -slideWidth
  }, 150, function () {
    $('#slider ul li:first-child').appendTo('#slider ul');
    $('#slider ul').css('left', '');
  });
};



var resetPage = function () {

  // Set up nav
  navSetup();

  // Check if the nav dropdown was down
  if (sessionStorage.getItem("open") == "true") {
     navDropdownMove();
  }

  // Set up the image slider
  sliderSetup();

  // If the interval hasn't been set yet
  if (!sliderIntervalHasBeenStarted) {
    
    // Make sure this is only executed once
    sliderIntervalHasBeenStarted = true;

    // Set the interval for the slides to automatically move
    sliderInterval = setInterval(moveRight, 5000);
  }

}

$(document).ready(resetPage);
$(window).load(resetPage);
$(window).resize(resetPage);