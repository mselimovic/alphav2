'use strict'

// navbar scroll

  window.addEventListener('scroll', function () {
    var fixedTop = document.querySelector('.fixed-top');
    if (fixedTop) {
      if (window.innerWidth < 992 && window.pageYOffset > 39) {
        fixedTop.style.top = '0';
      } else {
        if (window.pageYOffset > 39) {
          fixedTop.style.top = '-39px';
          fixedTop.classList.add('shadow');
        } else {
          fixedTop.style.top = '0';
        }
      }
    }
  });


