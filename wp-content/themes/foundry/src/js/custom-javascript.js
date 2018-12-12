  $(document).ready(function () {
      // hamburger menu
    $(document).on('click', '.cta', function () {
        $(this).toggleClass('active')
    })

    // Bootstrap menu magic
    $(window).resize(function() {
      if ($(window).width() < 768) {
        $(".dropdown-toggle").attr('data-toggle', 'dropdown');
      } else {
        $(".dropdown-toggle").removeAttr('data-toggle dropdown');
      }
    });
});

// Scrolling Effect

// $(window).on("scroll", function() {
//   if($(window).scrollTop()) {
//         $('.navbar').addClass('navwhite');
//   }
//   else {
//         $('.navbar').removeClass('navwhite');
//   }
// });
$(function() {
  //caches a jQuery object containing the header element
  var header = $(".navbar");
  var logo = $("#main-logo .cls-1");
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
            fill:"#fff",
            transition:"1s"
          });
      }
  });
});
