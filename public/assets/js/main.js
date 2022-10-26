$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);
    });
    
    
    //===== Mobile Menu 
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass('active');
    });
    
    $(".navbar-nav a").on('click', function() {
        $(".navbar-toggler").removeClass('active');
    });
    
    
    //===== close navbar-collapse when a  clicked
    
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
    
    
    //===== Sticky
    
    $(window).on('scroll',function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 10) {
            $(".navigation-bar").removeClass("sticky");
        }else{
            $(".navigation-bar").addClass("sticky");
        }
    });
    
    //=====  Slick
    
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function(e, slick) {
          var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
          doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
          var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
          doAnimations($animatingElements);
      });
      BasicSlider.slick({
          autoplay: true,
          autoplaySpeed: 5000,
          dots: true,
          fade: true,
    arrows: false,
          responsive: [
              { breakpoint: 767, settings: { dots: false, arrows: false } }
          ]
      });

      function doAnimations(elements) {
          var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
          elements.each(function() {
              var $this = $(this);
              var $animationDelay = $this.data('delay');
              var $animationType = 'animated ' + $this.data('animation');
              $this.css({
                  'animation-delay': $animationDelay,
                  '-webkit-animation-delay': $animationDelay
              });
              $this.addClass($animationType).one(animationEndEvents, function() {
                  $this.removeClass($animationType);
              });
          });
      }
  }
  mainSlider();
    //===== Section Menu Active
    
    var scrollLink = $('.page-scroll');
        // Active link switching
        $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function() {

          var sectionOffset = $(this.hash).offset().top - 90;

          if ( sectionOffset <= scrollbarLocation ) {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
          }
        });
    });
    
    
    //===== wow
    
    new WOW().init();
    
    
    //===== AOS
    
     AOS.init({
         duration: 800,
     });
    
    
    //===== Slick project
    
    $('.project-active').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 3,
        arrows: false,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });
    
    
    //===== Slick Testimonial
    
    $('.testimonial-active').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
    
    
    //===== Back to top
    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
    
    
    
    
    
    
    
});