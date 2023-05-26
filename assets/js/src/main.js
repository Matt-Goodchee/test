/* CUSTOM
========================================================= */
// window.addEventListener('DOMContentLoaded', function () {

// });

// jQuery Doc Ready
(function($){

  // Mobile Menu
  let menuButton = $('#navbar-toggle');
  let menu = $('#mobile-nav');
  if ( menuButton.length && menu.length ) {
    function openMenu() {
      menu.fadeIn();
      menu.addClass('open');
      menuButton.addClass('open');
      
    }
    function closeMenu() {
      menu.fadeOut();
      menu.removeClass('open');
      menuButton.removeClass('open');
    }
    menuButton.click( function(e) {
    // close
    if ( menu.hasClass('open') ) {
      closeMenu();
      $(document).off('click.menuToggle');
    } 
    // open
    else {
      openMenu();
      $(document).on('click.menuToggle', function(e) {
        if ( !$(e.target).closest(menuButton).length && !$(e.target).closest(menu).length ) {
          closeMenu();
          $(document).off('click.menuToggle');
        }
      });
    }
  });
  }

  // Notice Bar
  let noticeClose = $('#notice-close');
  if ( noticeClose.length ) {
    noticeClose.click( function(e) {
      e.preventDefault();
      setCookie('rc-notice-close', true);
      noticeClose.parents('.notice-bar').slideUp();
    });
  }

  // Footer Menu
  let footerShow = $('.footer .show-more a');
  if ( footerShow.length ) {
    footerShow.click( function(e) {
      e.preventDefault();
      footerShow.parent().hide();
      footerShow.parent().next().slideDown();
      footerShow.parents('.footer').removeClass('hidden');
    });
  }

  // Mini Provider Grid
  let slides = $('.providers-mini .wrapper');
  if ( slides.length ) {
    function initSlickSlider() {
      slides.slick({
        infinite: false,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3.5,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2.5,
          }
        }
        ]
      });
    }

    function destroySlickSlider() {
      slides.slick('unslick');
    }
    function checkViewportWidth() {
      if ($(window).width() <= 1024) {
        initSlickSlider();
      } else {
        destroySlickSlider();
      }
    }
    $(window).resize( debounce(function() {
      checkViewportWidth();
    }, 250));

    // run
    checkViewportWidth();
  }


})(jQuery);
