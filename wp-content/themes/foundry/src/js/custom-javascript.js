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



// ============ Works Grid =============

$('.filter a').click(function(e) {
	$('.filter a').removeClass('filterHighlighted');
	$(this).addClass('filterHighlighted');
  e.preventDefault();
  var a = $(this).attr('href');
  a = a.substr(1);
  $('.gallery a').each(function() {
    if (!$(this).hasClass(a) && a != 'all') {
      $(this).addClass('hideImg');
	} else {
      $(this).removeClass('hideImg');
	}
  });
});
