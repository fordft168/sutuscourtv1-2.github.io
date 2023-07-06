(function($) {

	'use strict';
  // JavaScript (jQuery)
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 400) {
        $('.site-header').addClass('scrolled');
        $('.navbar-nav').addClass('scrolled');
        $('.nav-link').addClass('scrolled');
        
      } else {
        $('.site-header').removeClass('scrolled');
        $('.navbar-nav').removeClass('scrolled');
        $('.nav-link').removeClass('scrolled');
      }
    });
  });

  //open search form
	$('.cd-search-trigger').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});

  //submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

  function toggleSearch(type) {
		if(type=="close") {
			//close serach 
			$('.cd-search').removeClass('is-visible');
			$('.cd-search-trigger').removeClass('search-is-visible');
			$('.cd-overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.cd-search').toggleClass('is-visible');
			$('.cd-search-trigger').toggleClass('search-is-visible');
			$('.cd-overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
			($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
		}
	}
    // // mobile_menu
    // var menu = $('ul#navbarResponsive');
    // if(menu.length){
    //   menu.slicknav({
    //     prependTo: ".mobile_menu",
    //     closedSymbol: '+',
    //     openedSymbol:'-'
    //   });
    // };

	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

  // aos
  AOS.init({
    duration: 1000
  });


	// home slider
	$('.home-slider').owlCarousel({
    loop:true,
    autoplay: true,
    margin:10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    autoplayHoverPause: true,
    items: 1,
    autoheight: true,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true
      }
    }
	});

	// owl carousel
	var majorCarousel = $('.js-carousel-1');
	majorCarousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 3,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
  	}
	});

	// owl carousel
	var major2Carousel = $('.js-carousel-2');
	major2Carousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    // animateOut: 'fadeOut',
    // animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    autoHeight: true,
    items: 3,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        dots: true,
        nav:true,
        loop:false
      }
  	}
	});

  // Owlcarousel
  $(document).ready(function() {
    var owl = $('#slider-card');
  
    owl.owlCarousel({
      loop: true,
      margin: 15,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        576: {
          items: 2,
          nav: false
        },
        992: {
          items: 3,
          nav: false
        }
      },
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      smartSpeed: 450,
      navSpeed: 600
    });
  
    $('.slider-next').click(function() {
      owl.trigger('next.owl.carousel');
    });
  
    $('.slider-prev').click(function() {
      owl.trigger('prev.owl.carousel');
    });
  });
  
  
  

  var siteStellar = function() {
    $(window).stellar({
      responsive: false,
      parallaxBackgrounds: true,
      parallaxElements: true,
      horizontalScrolling: false,
      hideDistantElements: false,
      scrollProperty: 'scroll'
    });
  }
  siteStellar();

  var smoothScroll = function() {
    var $root = $('html, body');

    $('a.smoothscroll[href^="#"]').click(function () {
      $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 500);
      return false;
    });
  }
  smoothScroll();

  var dateAndTime = function() {
    $('#m_date').datepicker({
      'format': 'm/d/yyyy',
      'autoclose': true
    });
    $('#checkin_date, #checkout_date').datepicker({
      'format': 'd MM, yyyy',
      'autoclose': true
    });
    $('#m_time').timepicker();
  };
  dateAndTime();


  var windowScroll = function() {

    $(window).scroll(function(){
      var $win = $(window);
      if ($win.scrollTop() > 200) {
        $('.js-site-header').addClass('scrolled');
      } else {
        $('.js-site-header').removeClass('scrolled');
      }

    });

  };
  windowScroll();


  var goToTop = function() {

    $('.js-gotop').on('click', function(event){
      
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $('html').offset().top
      }, 500, 'easeInOutExpo');
      
      return false;
    });

    $(window).scroll(function(){

      var $win = $(window);
      if ($win.scrollTop() > 200) {
        $('.js-top').addClass('active');
      } else {
        $('.js-top').removeClass('active');
      }

    });
  
  };


})(jQuery);