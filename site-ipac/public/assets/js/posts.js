  // Inicialização do Swiper com 3 colunas no desktop
  const swiper = new Swiper('.instagramSwiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }, // 3 colunas no desktop
    }
  });

  // Re-processa os embeds ao carregar a página
  window.addEventListener('load', () => {
    if (window.instgrm) {
      window.instgrm.Embeds.process();
    }
  });
