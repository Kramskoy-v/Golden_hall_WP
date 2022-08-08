//swiper banner

const bannerSwiper = new Swiper('.swiper-banner', {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  effect: "fade",

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-banner',
    prevEl: '.swiper-button-next-banner',
  },

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: false,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + 0 + (index + 1) + "</span>";
    },
  },
});


//swiper silver
const silverSwiper = new Swiper('.swiper-silver-hall', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-silver',
    prevEl: '.swiper-button-next-silver',
  },
});

//swiper golden
const goldenSwiper = new Swiper('.swiper-golden-hall', {
  // Optional parameters
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-golden',
    prevEl: '.swiper-button-next-golden',
  },
});

//swiper rotunda
const rotundaSwiper = new Swiper('.swiper-rotunda', {
  // Optional parameters
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-rotunda',
    prevEl: '.swiper-button-next-rotunda',
  },
});

//swiper gallery

// Optional parameters
const swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  slidesPerView: 1,
  coverflowEffect: {
    rotate: 10,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-gallery',
    prevEl: '.swiper-button-next-gallery',
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
    },
    // when window width is >= 1600px
    1600: {
      slidesPerView: 5,
    }
  }
});


//Swiper food-menu
const foodSwiper = new Swiper('.swiper-food-menu', {
  // Optional parameters
  loop: true,
  centeredSlides: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-prev-food',
    prevEl: '.swiper-button-next-food',
  },
});

//Hamburger menu
let hamburger = document.querySelector('.hamburger');
let mobileMenu = document.querySelector('.menu');
let linkClose = document.querySelector('.menu__list');
let crossClose = document.querySelector('.cross-close');

hamburger.addEventListener('click', function () {
  mobileMenu.classList.toggle('menu--active')
});

function closeMenu() {
  mobileMenu.classList.remove('menu--active');
}

crossClose.addEventListener('click', function () {
  closeMenu()
});

linkClose.addEventListener('touchstart', function (event) {
  if (event.target.closest('.menu__link')) {
    closeMenu(), closeHam();
  }
});

//кнопка вверх при скроле

(function () {
  'use strict';

  function trackScroll() {
    let scrolled = window.pageYOffset;
    let coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
      goTopBtn.classList.remove('back_to_top-show');
    }
  }

  function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  }
  let goTopBtn = document.querySelector('.back_to_top');
  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);
})();


//parallax
jQuery(document).ready(function ($) {
  if ($("#scene3").length > 0) {
    var scene3 = document.getElementById('scene3');
    var parallax3 = new Parallax(scene3);
  }
});

jQuery(document).ready(function ($) {
  if ($("#scene").length > 0) {
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
  }
});

jQuery(document).ready(function ($) {
  if ($("#scene2").length > 0) {
    var scene2 = document.getElementById('scene2');
    var parallax2 = new Parallax(scene2);
  }
});

jQuery(document).ready(function ($) {
  if ($("#scene4").length > 0) {
    var scene4 = document.getElementById('scene4');
var parallax4 = new Parallax(scene4);
  }
});






