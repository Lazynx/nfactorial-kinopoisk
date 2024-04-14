// import './bootstrap';

const swiper = new Swiper('.focus__swiper', {
  direction: 'horizontal',

  breakpoints: {
    1020: {
      slidesPerView: 4,
      spaceBetween: 8,
      slidesPerGroup: 4,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 5,
      slidesPerGroup: 2,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 5,
      slidesPerGroup: 1,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      slidesPerGroup: 1,
    }
  },

  navigation: {
    nextEl: '.focus__swiper-button-next',
    prevEl: '.focus__swiper-button-prev',
  },
});

const now_watching_swiper = new Swiper('.watching-now__swiper', {
  direction: 'horizontal',

  breakpoints: {
    1020: {
      slidesPerView: 4,
      spaceBetween: 8,
      slidesPerGroup: 4,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 5,
      slidesPerGroup: 2,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 5,
      slidesPerGroup: 1,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      slidesPerGroup: 1,
    }
  },

  navigation: {
    nextEl: '.watching-now__swiper-button-next',
    prevEl: '.watching-now__swiper-button-prev',
  },
});

const top__swiper = new Swiper('.top-10__swiper', {
  direction: 'horizontal',


  breakpoints: {
    1020: {
      slidesPerView: 3,
      spaceBetween: 22.5,
      slidesPerGroup: 2,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
      slidesPerGroup: 1,
    },
    600: {
      slidesPerView: 1,
      spaceBetween: 10,
      slidesPerGroup: 1,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      slidesPerGroup: 1,
    }
  },

  navigation: {
    nextEl: '.top-10__swiper-button-next',
    prevEl: '.top-10__swiper-button-prev',
  },
});

// flash
document.addEventListener("DOMContentLoaded", function() {
  var flashAlert = document.getElementById('flash-alert');

  setTimeout(function() {
      flashAlert.classList.add('hidden');
  }, 5000);
});
