const gallerySwiper = new Swiper('.gallerySwiper', {
  slidesPerView: 3,
  centeredSlides: true,
  spaceBetween: 32,
  speed: 600,
  loop: true,

  navigation: {
    nextEl: '.gallery-next',
    prevEl: '.gallery-prev',
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 12,
    },

    375: {
      slidesPerView: 1,
      spaceBetween: 14,
    },

    425: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },

    1024: {
      slidesPerView: 2,
      spaceBetween: 24,
    },

    1440: {
      slidesPerView: 3,
      spaceBetween: 24,
    }
  }
});