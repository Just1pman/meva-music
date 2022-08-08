const settings = {
    autoplay: true,
    // autoHeight: true,
    loop: true,
    spaceBetween: 30,
    grabCursor: true,
    // mousewheel: true,
    keyboard: {
        enabled: true,
    },

}

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    ...settings,
});

const wideSwiper = new Swiper('.wide-swiper', {
    navigation: {
        nextEl: '.wide-swiper-button-next',
        prevEl: '.wide-swiper-button-prev',
    },
    pagination: {
        el: '.wide-swiper-pagination',
        clickable: true,
    },
    ...settings
});