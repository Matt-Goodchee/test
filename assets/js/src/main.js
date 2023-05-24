/* CUSTOM
========================================================= */
// window.addEventListener('DOMContentLoaded', function () {

// });

// Doc Ready

(function($){

  // Mobile Menu
  let menuButton = $('#navbar-toggle');
  let menu = $('#mobile-nav');

  function openMenu() {
    menu.fadeIn();
    menu.addClass('open');
  }
  function closeMenu() {
    menu.fadeOut();
    menu.removeClass('open');
  }
  menuButton.click( function(e) {
    // close
    if ( menu.hasClass('open') ) {
      closeMenu();
      $(document).off('click.menuToggle');
          console.log('STOP watching DOC 1');
    } 
    // open
    else {
      openMenu();
      $(document).on('click.menuToggle', function(e) {
        console.log('watching DOC');
        if ( !$(e.target).closest(menuButton).length && !$(e.target).closest(menu).length ) {
          closeMenu();
          $(document).off('click.menuToggle');
          console.log('STOP watching DOC 2');
        }
      });
    }
  });


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

})(jQuery);
