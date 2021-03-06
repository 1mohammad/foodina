$(document).ready(() => {
    window.onscroll = () => {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80
        ) {
            $('#navigation-menu').addClass('fixedMenu');
        } else {
            $('#navigation-menu').removeClass('fixedMenu');
        }
    }

    var swiper = new Swiper('.homeswiper', {
        navigation: {
            nextEl: '.customNP .left ',
            prevEl: '.customNP .right',
        },
        effect: 'fade',
        lazy: true,
        pagination: {
            el: '.homeswiper .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //         slidesPerView: 2,
        //         spaceBetween: 20,
        //     },
        //     // when window width is >= 480px
        //     480: {
        //         slidesPerView: 3,
        //         spaceBetween: 30,
        //     },
        //     // when window width is >= 640px
        //     640: {
        //         slidesPerView: 4,
        //         spaceBetween: 40,
        //     },
        // },
    });
    var swiper2 = new Swiper('.BestDayFood', {
        navigation: {
            nextEl: '.customNP .page-prev ',
            prevEl: '.customNP .page-next',
        },

        spaceBetween: 30,
        slidesPerView: '4',
        lazy: true,
        pagination: {
            el: '.BestDayFood .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1.3,
                spaceBetween: 30,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
});