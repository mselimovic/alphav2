'use strict'

// Initiate the wowjs
// new WOW().init();

// navbar scroll

window.addEventListener('scroll', function () {
var fixedTop = document.querySelector('.fixed-top');
if (fixedTop) {
if (window.innerWidth < 992 && window.pageYOffset> 24) {
    fixedTop.style.top = '0';
    } else {
    if (window.pageYOffset > 24) {
    fixedTop.style.top = '-24px';
    fixedTop.classList.add('shadow');
    } else {
    fixedTop.style.top = '0';
    }
    }
    }
    });

    // testemonial
        $(".testimonial-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            smartSpeed: 1000,
            dots: true,
            loop: true,
            nav: true,
            navText : [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ]
        });
  

// language selector
$(document).ready(function() {
    var langButton = $(".lang-menu-drop");
    var navbarToggle = $(".navbar-toggler");

    navbarToggle.click(function() {
        langButton
            .toggle();
    });

    $(".navbar-collapse").on("hidden.bs.collapse", function() {
        langButton.hide();
    });
});

(function ($) {
new WOW().init();
});

// cards switcher
