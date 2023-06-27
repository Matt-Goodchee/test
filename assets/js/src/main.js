
/* GSAP 
========================================================= */

// Config
gsap.registerPlugin(ScrollTrigger);

gsap.config({
  nullTargetWarn: false,
});

// InView
var inViewElements = gsap.utils.toArray(".scrolled");
inViewElements.forEach(function (inviewElement) {
  ScrollTrigger.create({
    trigger: inviewElement,
    start: "top 50%",
    onToggle: () => {
      inviewElement.classList.add("inview");
    },
  });
});

// Animate Single Element
var animateElement = gsap.utils.toArray(".animated");
animateElement.forEach(function (element) {
  var positionValueX = element.getAttribute("data-anim-x") || 0;
  var positionValueY = element.getAttribute("data-anim-y") || 0;
  var scaleValue = element.getAttribute("data-anim-scale") || 1;
  var delayValue = element.getAttribute("data-anim-delay") || 0;
  gsap.set(element, { opacity: 1 });
  gsap.from(element, {
    opacity: 0,
    x: positionValueX,
    y: positionValueY,
    duration: 1,
    ease: "power3.inOut",
    delay: delayValue,
    scale: scaleValue,
    transformOrigin: "center center",
    scrollTrigger: {
      trigger: element,
      start: "top 70%",
    },
  });
});

// Animate Grouped Elements
var staggerGroup = gsap.utils.toArray(".animated-group");
staggerGroup.forEach(function (group) {
  var elements = group.querySelectorAll(".animated-entry");
  gsap.set(elements, { opacity: 1 });
  gsap.from(elements, {
    scrollTrigger: {
      trigger: group,
      start: "top 70%",
    },
    y: -10,
    opacity: 0,
    duration: 1,
    ease: "power3.inOut",
    stagger: 0.1,
  });
});

// Route SVG
const routeTL = gsap.timeline({});
routeTL
.to(".route-map-svg", { opacity: 1 })
.fromTo(
  ".route-map-svg .route-logos g",
  {
    opacity: 0,
    scale: 0.95,
  },
  {
    opacity: 1,
    scale: 1,
    stagger: 0.2,
    delay: 0.5,
    duration: 1,
  }
  )
.fromTo(
  ".route-map-svg .main-routes g",
  {
    opacity: 0,
    scale: 0.98,
  },
  {
    opacity: 1,
    scale: 1,
    stagger: 0.2,
    delay: 0.5,
    duration: 1,
  },
  "<"
  )
.fromTo(
  ".route-map-svg #city-names-and-background",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    duration: 1,
  },
  ">-0.8"
  );

// Logo Animation
const logoTL = gsap.timeline({});
logoTL.to(".main-logo", { opacity: 1 }).fromTo(
  ".main-logo g",
  {
    opacity: 0,
    x: -20,
  },
  {
    opacity: 1,
    x: 0,
    stagger: 0.15,
    duration: 0.8,
  }
  );

/* jQuery Doc Ready
========================================================= */
(function ($) {
  // Mobile Menu
  let menuButton = $("#navbar-toggle");
  let menu = $("#mobile-nav");
  if (menuButton.length && menu.length) {
    function openMenu() {
      gsap.set(menu, { display: "block", y: 0, scale: 1 });
      gsap.fromTo(
        menu,
        {
          autoAlpha: 0,
          x: 20,
        },
        {
          autoAlpha: 1,
          x: 0,
          duration: 0.3,
        }
        );
      gsap.fromTo(
        "#mobile-nav figure",
        {
          autoAlpha: 0,
          x: 50,
        },
        {
          autoAlpha: 1,
          x: 0,
          duration: 0.3,
        }
        );
      menu.addClass("open");
      menuButton.addClass("open");
    }
    function closeMenu() {
      gsap.fromTo(
        menu,
        {
          autoAlpha: 1,
          x: 0,
        },
        {
          autoAlpha: 0,
          x: 10,
          duration: 0.15,
          onComplete: () => {
            gsap.set(menu, { display: "none" });
          },
        }
        );
      menu.removeClass("open");
      menuButton.removeClass("open");
    }
    $("#nav-close").click(function (e) {
      e.preventDefault();
      closeMenu();
    });
    menuButton.click(function (e) {
      e.preventDefault();

      // close
      if (menu.hasClass("open")) {
        closeMenu();
        $(document).off("click.menuToggle");
      }

      // open
      else {
        openMenu();
        $(document).on("click.menuToggle", function (e) {
          if (
            !$(e.target).closest(menuButton).length &&
            !$(e.target).closest(menu).length
            ) {
            closeMenu();
          $(document).off("click.menuToggle");
        }
      });
      }
    });
  }

  // Notice Bar
  let noticeClose = $("#notice-close");
  if (noticeClose.length) {
    noticeClose.click(function (e) {
      e.preventDefault();
      setCookie("rc-notice-close", true);
      noticeClose.parents(".notice-bar").slideUp();
    });
  }

  // Footer Menu
  let footerTrigger = $(".footer.alt .show-more a");
  if (footerTrigger.length) {
    footerTrigger.click(function (e) {
      e.preventDefault();
      if (footerTrigger.hasClass("closed")) {
        footerTrigger.parent().next().slideDown();
        footerTrigger.removeClass("closed").addClass("open");
        footerTrigger.find(".open").hide();
        footerTrigger.find(".close").show();
        $("html, body").animate({ scrollTop: "+=100px" }, "slow");
      } else {
        footerTrigger.parent().next().slideUp();
        footerTrigger.removeClass("open").addClass("closed");
        footerTrigger.find(".close").hide();
        footerTrigger.find(".open").show();
      }
    });
  }

  // Mini Provider Grid
  let slides = $(".providers-mini .wrapper");
  if (slides.length > 0) {
    function initSlickSlider() {
      slides.slick({
        infinite: false,
        slidesToScroll: 0,
        swipeToSlide: true,
        touchThreshold: 9,
        edgeFriction: 1,
        dots: false,
        arrows: false,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3.5
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2.5
          },
        },
        ],
      });
    }

    function destroySlickSlider() {
      slides.slick("unslick");
    }
    function checkViewportWidth() {
      if (window.matchMedia("(max-width: 1024px)").matches) {
        initSlickSlider();
      } 
      else if (slides.hasClass('slick-initialized')) {
        destroySlickSlider();
      }
    }

    $(window).resize(debounce(function() {
      checkViewportWidth();
    }, 200)
    );

    // run
    checkViewportWidth();
  }

  // Move GTranslate Widget
  function translateWidget() {
    const widget = $("#gtranslate");
    if (widget.length > 0) {
      if (window.matchMedia("(max-width: 768px)").matches) {
        widget.appendTo($("#mobile-nav .search-form"));
      } 
      else if (widget.next('.map-toggle').length === 0) {
        widget.prependTo($(".mobile-nav-header .menu-items"));
      }
    }
  }

  $(window).resize(debounce(function() {
    translateWidget();
  }, 200)
  );

  // run
  translateWidget();

})(jQuery);
