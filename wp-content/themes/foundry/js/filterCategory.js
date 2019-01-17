
/*------------------- GALLERY GRID */

var listSelect = $('.cat-item');
$('.cat-item a').click(function(e) {
    $('.cat-item a').removeClass('active');
    $(this).addClass('active');
    listSelect.removeClass('selected');
    $(this).parent().addClass('selected');
  e.preventDefault();
  var a = $(this).attr('href');
  a = a.substr(1);
  $('.ajax-call').each(function() {
    if ($(this).hasClass(a) && a != 'all') {
        $(this).addClass('hideImg');
        setTimeout(function() { this.style.display='none'; }, 3000);
	} else {
      $(this).removeClass('hideImg');
      $(this).show();
    }
  });
});

