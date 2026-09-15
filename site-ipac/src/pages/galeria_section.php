<?php

$imagens_clinica = [
    '/assets/images/sala-clinica01.png',
    '/assets/images/sala-clinica02.png',
    '/assets/images/sala-clinica04.png',
    '/assets/images/sala-clinica05.png',
    '/assets/images/sala-clinica06.png',
    '/assets/images/sala-clinica07.png',
    '/assets/images/sala-clinica08.png',
    '/assets/images/sala-clinica09.png',
];

?>

<section id="sobre" class="px-4 min-[375px]:px-5 min-[425px]:px-6 md:px-12 lg:px-20 min-[1440px]:px-20 py-16 min-[375px]:py-18 min-[425px]:py-20 md:py-24 relative overflow-hidden bg-neutral-50">

  <!-- Glow principal -->
  <div
    class="absolute left-1/2 top-[-180px] min-[375px]:top-[-200px] min-[425px]:top-[-220px] md:top-[-260px]
           -translate-x-1/2
           w-[900px] min-[375px]:w-[1100px] min-[425px]:w-[1300px] md:w-[1500px] lg:w-[1700px]
           h-[600px] min-[375px]:h-[700px] min-[425px]:h-[760px] md:h-[820px] lg:h-[900px]
           rounded-full opacity-90
           blur-[80px] min-[425px]:blur-[100px] md:blur-[120px]"
    style="background:#e7e7e7;">
  </div>

  <!-- Degradê branco -->
  <div
    class="absolute inset-0"
    style="background:linear-gradient(to bottom,rgba(255,255,255,.75) 0%,rgba(255,255,255,.15) 40%,rgba(255,255,255,1) 100%);">
  </div>

  <div class="relative z-10 w-full max-w-[1440px] mx-auto">

    <div class="flex flex-col items-center gap-2">

      <span class="text-xs min-[375px]:text-[13px] min-[425px]:text-sm text-[#9aaa00] font-medium tracking-[1.5px]">
        Nosso Espaço
      </span>

      <h3 class="text-[22px] min-[375px]:text-[24px] min-[425px]:text-[26px] md:text-[28px] lg:text-[24px] xl:text-[28px]
                 text-black font-cormorant text-center leading-tight">
        Ambiente preparado para o
        <span class="text-[#9aaa00]">seu bem-estar.</span>
      </h3>

      <p class="text-[13px] min-[375px]:text-sm md:text-[15px] lg:text-sm xl:text-[15px]
                text-gray-500 text-center leading-relaxed max-w-lg
                px-1 min-[375px]:px-2 min-[425px]:px-0">
        Ambientes climatizados, privativos e projetados com conforto para proporcionar uma experiência tranquila
      </p>

    </div>

    <div class="relative mt-7 min-[375px]:mt-8 min-[425px]:mt-9 md:mt-10">

      <div class="swiper gallerySwiper w-full">
        <div class="swiper-wrapper">

          <?php foreach ($imagens_clinica as $imagem) { ?>
            <div class="swiper-slide">

              <img
                src="<?= htmlspecialchars($imagem) ?>"
                alt="Sala da Clínica"
                class="w-full
                       h-[220px] min-[375px]:h-[250px] min-[425px]:h-[280px]
                       md:h-[400px] lg:h-[450px] xl:h-[500px]
                       max-h-[500px]
                       rounded-[24px] min-[425px]:rounded-[28px] md:rounded-[32px]
                       object-cover"
              />

            </div>
          <?php } ?>

        </div>
      </div>

      <button
        type="button"
        class="gallery-prev
               absolute z-20
               left-2 min-[375px]:left-3 md:left-5
               top-1/2 -translate-y-1/2
               flex items-center justify-center
               w-9 h-9 min-[375px]:w-10 min-[375px]:h-10 md:w-12 md:h-12
               rounded-full
               bg-white/90
               text-black
               shadow-md
               hover:bg-white
               transition cursor-pointer"
        aria-label="Imagem anterior"
      >
        <?= icon('chevron-left', 20, 'text-black') ?>
      </button>

      <button
        type="button"
        class="gallery-next
               absolute z-20
               right-2 min-[375px]:right-3 md:right-5
               top-1/2 -translate-y-1/2
               flex items-center justify-center
               w-9 h-9 min-[375px]:w-10 min-[375px]:h-10 md:w-12 md:h-12
               rounded-full
               bg-white/90
               text-black
               shadow-md
               hover:bg-white
               transition cursor-pointer"
        aria-label="Próxima imagem"
      >
        <?= icon('chevron-right', 20, 'text-black') ?>
      </button>

    </div>

  </div>

</section>

<script src="/assets/js/carrossel.js"></script>