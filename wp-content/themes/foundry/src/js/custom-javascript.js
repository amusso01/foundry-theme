  $(document).ready(function () {
      // hamburger menu
    $(document).on('click', '.cta', function () {
        $(this).toggleClass('active')
    });
});

jQuery(function($) {
  // Bootstrap menu magic
  if($(window).width() < 767) {
     $(".dropdown-toggle").attr('data-toggle', 'dropdown');
   $('.dropdown').on('show.bs.dropdown', function () {
   $(this).siblings('.open').removeClass('open').find('a.dropdown-toggle').attr('data-toggle', 'dropdown');
   $(this).find('a.dropdown-toggle').removeAttr('data-toggle');
     });
  } 
});

// Scrolling Effect

$(function() {
  //caches a jQuery object containing the header element
  var header = $(".navbar");
  var logo = $("#main-logo .cls-1");
  var navbar = $("#wrapper-navbar");
  var dropdown = $(".bg-primary .container");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 300) {
          header.addClass("navwhite");
          header.css({position:"fixed"});
          logo.css({
            fill:"#000",
            transition:"1s"
          });
      } else if (scroll == 0 ) {
          header.removeClass('navwhite');
          header.css({position:"relative"});
          logo.css({
            transition:"1s"
          });
          if(navbar.hasClass("navbar-home")){
            logo.css({
              fill:"#fff"
            })
          }
      }
  });
});
  

// ============ animate on scroll =============

var animateHTML = function() {
  var elems;
  var windowHeight;
  function init() {
    elems = document.querySelectorAll('.hidden-animate');
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var positionFromTop = elems[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace(
          'hidden-animate',
          'fadeAll'
        );
      }
    }
  }
  return {
    init: init
  };
};
animateHTML().init();

// ======== Scroll Counter ========
var iterator = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (iterator == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {
          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }

        });
    });
    iterator = 1;
  }
});