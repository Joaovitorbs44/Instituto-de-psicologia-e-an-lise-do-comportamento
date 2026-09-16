document.addEventListener('DOMContentLoaded', function () {

    const swiperElement = document.querySelector('.instagramSwiper');

    if (!swiperElement) {
        console.warn('Instagram Swiper não encontrado.');
        return;
    }

    const instagramSwiper = new Swiper(swiperElement, {

        slidesPerView: 1,
        spaceBetween: 24,

        loop: false,

        watchOverflow: true,

        observer: true,
        observeParents: true,
        observeSlideChildren: true,

        navigation: {
            nextEl: '.instagramSwiper .swiper-button-next',
            prevEl: '.instagramSwiper .swiper-button-prev',
        },

        pagination: {
            el: '.instagramSwiper .swiper-pagination',
            clickable: true,
        },

        breakpoints: {

            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },

            1024: {
                slidesPerView: 3,
                spaceBetween: 24,
            }

        }

    });


    /*
    ============================
    INSTAGRAM EMBEDS
    ============================
    */

    function processInstagram() {

        if (
            window.instgrm &&
            window.instgrm.Embeds
        ) {

            window.instgrm.Embeds.process();

            /*
             * Dá tempo para o Instagram
             * transformar os blockquotes
             * em iframes.
             */
            setTimeout(() => {

                instagramSwiper.update();

            }, 1000);

        }

    }


    processInstagram();


    /*
    Caso o script do Instagram
    carregue depois do nosso JS.
    */

    window.addEventListener('load', function () {

        processInstagram();

        setTimeout(() => {

            instagramSwiper.update();

        }, 1500);

    });

});
