
/* COOKIES
========================================================= */

// Get Cookie
function getCookie(name) {
  var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
  return v ? v[2] : null;
}

// Set Cookie
function setCookie(name, value, days) {
  var d = new Date;
  if ( days != '0' ) {
    d.setTime(d.getTime() + 24*60*60*1000*days);
    var expiretime = d.toGMTString();
  } else {
    var expiretime = 0;
  }
  document.cookie = name + "=" + value + ";path=/;expires=" + expiretime;
}

// Debounce
function debounce(func, delay) {
  let timerId;
  return function() {
    const context = this;
    const args = arguments;
    clearTimeout(timerId);
    timerId = setTimeout(function() {
      func.apply(context, args);
    }, delay);
  };
}

(function($) { // Doc Ready


/* SMOOTH INTERNAL LINKS
========================================================= */
$('a[href*="#"]').not('[href="#"]').click( function(event) {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if ( target.length ) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 800);
    }
  }
});


})(jQuery); // End Document Ready
