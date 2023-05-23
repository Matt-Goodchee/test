/* CUSTOM
========================================================= */
// window.addEventListener('DOMContentLoaded', function () {

// });

// Doc Ready

(function($){


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
