<?php
  $instagram_posts = [
    // PSICOTERAPIA ONLINE FUNCIONA MESMO
    'https://www.instagram.com/p/DZFccolDrOC/?img_index=1',

    // QUAL É O PAPEL DA PSICOTERAPIA NO TRATAMENTO DOS TRANSTORNOS DE ANSIEDADE?
    'https://www.instagram.com/p/DbLimUIuz5H/',
    
    // "BETS" e JOGOS DE AZAR O que faz alguém continuar apostando, mesmo quando está PERDENDO?
    'https://www.instagram.com/p/DanPg69uwQO/',

    // Faltou força de vontade. BASTA TER FORÇA DE VONTADE
    'https://www.instagram.com/p/Da5xhQcpiFw/',

    // Nem tudo que PENSAMOS CORRESPONDE à realidade.
    'https://www.instagram.com/p/DaxqveQsgii/'
  ];
?>

<section class="w-full h-screen px-8 md:px-20 lg:px-40 py-20 bg-white">

<div class="flex flex-col items-center gap-2 relative z-10">
    <span class="text-sm text-[#9aaa00] font-medium tracking-[1.5px]">
    Conteúdo & Saúde Mental
    </span>

    <h3 class="sm:text-[16px] md:text-[20px] lg:text-[24px] text-black font-cormorant">
     Informação de qualidade para o
      <span class="text-[#9aaa00]">seu bem-estar.</span>
    </h3>

    <p class="text-sm text-gray-500 text-center leading-relaxed max-w-lg">
      Acompanhe nossas publicações com reflexões, orientações sobre psicoterapia e conteúdos práticos para o seu dia a dia.
    </p>
  </div>
  
  <!-- CONTAINER DO SWIPER -->
  <div class="swiper instagramSwiper mt-10 !pb-10">
    <div class="swiper-wrapper">

      <?php foreach ($instagram_posts as $post_url): ?>
        <div class="swiper-slide !h-auto">
          <div class="flex flex-col h-full instagram-card">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="<?php echo htmlspecialchars($post_url); ?>" data-instgrm-version="14"></blockquote>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Controles de Navegação -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

  </div>

</section>
