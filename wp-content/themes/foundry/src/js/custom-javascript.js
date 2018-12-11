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

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
        $('.navbar').addClass('navwhite');
  }
  else {
        $('.navbar').removeClass('navwhite');
  }
});
