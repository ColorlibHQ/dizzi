/**
 * Dizzi front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Magnific Popup, Owl Carousel and Isotope that build the
 * same markup, so the theme's stylesheets apply unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  UI.ready(function () {
    var menus = UI.toElements('.main_menu');
    window.addEventListener('scroll', function () {
      var fixed = window.pageYOffset + 1 > 50;
      menus.forEach(function (menu) {
        if (fixed) {
          menu.classList.add('menu_fixed', 'animated', 'fadeInDown');
        } else {
          menu.classList.remove('menu_fixed', 'animated', 'fadeInDown');
        }
      });
    }, { passive: true });
  });

  // The old script ran this same call again on window load; ColorlibUI
  // calls are idempotent, so once is enough.
  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  UI.enhanceSelects('select');

  UI.owl('.client_logo_slider', {
    items: 6,
    loop: true,
    responsive: {
      0: {
        items: 3,
        margin: 15
      },
      600: {
        items: 3,
        margin: 15
      },
      991: {
        items: 5,
        margin: 15
      },
      1200: {
        items: 6,
        margin: 15
      }
    }
  });

  function onLoad() {
    // Portfolio grid and its filter buttons.
    var workGrid = [];
    if (document.getElementById('portfolio')) {
      workGrid = UI.isotope('.portfolio-grid', {
        itemSelector: '.all'
      });
    }

    var filters = UI.toElements('.portfolio-filter ul li');
    filters.forEach(function (item) {
      item.addEventListener('click', function () {
        filters.forEach(function (li) { li.classList.remove('active'); });
        item.classList.add('active');

        var data = item.getAttribute('data-filter');
        workGrid.forEach(function (grid) {
          grid.arrange({ filter: data });
        });
      });
    });

    UI.owl('.review_part_text', {
      items: 2,
      loop: true,
      dots: true,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        768: {
          items: 2
        }
      }
    });
  }

  if (document.readyState === 'complete') {
    onLoad();
  } else {
    window.addEventListener('load', onLoad);
  }
}());
