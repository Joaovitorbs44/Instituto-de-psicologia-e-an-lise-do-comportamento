<?php
$instagram_posts = [
    'https://www.instagram.com/p/DZFccolDrOC/',
    'https://www.instagram.com/p/DbLimUIuz5H/',
    'https://www.instagram.com/p/DanPg69uwQO/',
    'https://www.instagram.com/p/Da5xhQcpiFw/',
    'https://www.instagram.com/p/DaxqveQsgii/'
];
?>

<section class="w-full px-8 md:px-20 lg:px-40 py-20 bg-white overflow-hidden">

    <div class="flex flex-col items-center gap-2 relative z-10">

        <span class="text-sm text-[#9aaa00] font-medium tracking-[1.5px]">
            Conteúdo & Saúde Mental
        </span>

        <h3 class="sm:text-[16px] md:text-[20px] lg:text-[24px] text-black font-cormorant text-center">
            Informação de qualidade para o
            <span class="text-[#9aaa00]">seu bem-estar.</span>
        </h3>

        <p class="text-sm text-gray-500 text-center leading-relaxed max-w-lg">
            Acompanhe nossas publicações com reflexões, orientações sobre
            psicoterapia e conteúdos práticos para o seu dia a dia.
        </p>

    </div>

    <div class="instagram-carousel-wrapper">

        <div class="swiper instagramSwiper">

            <div class="swiper-wrapper">

                <?php foreach ($instagram_posts as $post_url): ?>

                    <div class="swiper-slide">

                        <div class="instagram-card">

                            <blockquote
                                class="instagram-media"
                                data-instgrm-captioned
                                data-instgrm-permalink="<?= htmlspecialchars($post_url); ?>"
                                data-instgrm-version="14">
                            </blockquote>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>

        </div>

    </div>

</section>
