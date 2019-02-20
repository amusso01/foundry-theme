  $(document).ready(function () {
    var mainBanner = $('.jumbo-video');
    var logo = $("#main-logo .cls-1");
    var header = $(".navbar");
      // hamburger menu
    $(document).on('click', '.cta', function () {
        $(this).toggleClass('active');
        if($(this).hasClass('active')){
          mainBanner.css({top:0});
          logo.css({
            fill:"#000",
            transition:"1s"
          })
        }else if (mainBanner.length){
          mainBanner.css({top:-87});
          if(!header.hasClass('navwhite')){
            logo.css({
              fill:"#fff",
              transition:"1s"
            })
          }
        }
    });
    projectType();
    projectCat();
    callingHour();
    var observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
});

jQuery(function($) {
  // Menu magic
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
  

// ============ animate fade-up on scroll =============

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

// ======== Contact Form ========

function remove(array, element) {
  var index = array.indexOf(element);
  if (index !== -1) {
    array.splice(index, 1);
  }
}

function projectCat(){
  var inputValue = $('.btn-categorie');
  var allValue =[] ;
  var element;
  var target = $('#categorie');
  $(inputValue).click(function(){
    element = $(this).val();
    if(!$(this).hasClass('.btn-click')){
      $(this).addClass("btn-click");
    }

    if (Array.isArray(allValue) && allValue.length){
      if(allValue.indexOf($(this).val()) === -1){
        allValue.push(element);
      }else{ 
        remove(allValue,element);
        $(this).removeClass("btn-click");
      }
    }else{
      allValue.push(element);
    }
    target.val(allValue.toString())
  });
}

function projectType(){
  var inputValue = $('.btn-project');
  var allValue =[] ;
  var element;
  var target = $('#categoriesProject');
  $(inputValue).click(function(){
    element = $(this).val();
    if(!$(this).hasClass('.btn-click')){
      $(this).addClass("btn-click");
    }

    if (Array.isArray(allValue) && allValue.length){
      if(allValue.indexOf($(this).val()) === -1){
        allValue.push(element);
      }else{ 
        remove(allValue,element);
        $(this).removeClass("btn-click");
      }
    }else{
      allValue.push(element);
    }
    target.val(allValue.toString())
  });
}

function callingHour(){
  var inputValue = $('.btn-time');
  var allValue =[] ;
  var element;
  var target = $('#hour');
  $(inputValue).click(function(){
    element = $(this).val();
    if(!$(this).hasClass('.btn-click')){
      $(this).addClass("btn-click");
    }
    if (Array.isArray(allValue) && allValue.length){
      if(allValue.indexOf($(this).val()) === -1){
        allValue.push(element);
      }else{ 
        remove(allValue,element);
        $(this).removeClass("btn-click");
      }
    }else{
      allValue.push(element);
    }
    target.val(allValue.toString())
  });
}

	
// Dynamic typewrite menu
$('#mega-create').mouseenter(function(){
  $('#static').html('WE').fadeIn('slow');
  if($('#dynamic').hasClass('build-menu')|| $('#dynamic').hasClass('promote-menu')){
    $('#dynamic').removeClass();
  }
  
  $('#dynamic').html('CREATE').addClass('create-menu');
 
});

$('#mega-build').mouseenter(function(){
  $('#static').html('WE').fadeIn('slow');
  if($('#dynamic').hasClass('create-menu')|| $('#dynamic').hasClass('promote-menu')){
    $('#dynamic').removeClass();
  }
 
  $('#dynamic').html('BUILD').addClass('build-menu');

  
});

$('#mega-promote').mouseenter(function(){
  $('#static').html('WE').fadeIn('slow');
 
  if($('#dynamic').hasClass('build-menu')|| $('#dynamic').hasClass('create-menu')){
    $('#dynamic').removeClass();
  }
  $('#dynamic').html('PROMOTE').addClass('promote-menu');


});



