const settings = {
    autoplay: true,
    loop: true,
    spaceBetween: 30,
    grabCursor: true,
    lazy: true,
    preloadImages: false,
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    on: {
        lazyImageReady: (swiper) => {swiper.update()}
    }
}

new Swiper('.aboutUsSlider', {
    slidesPerView: "auto",
    ...settings,
});

new Swiper(".wide-swiper", {
    slidesPerView: 1,
    breakpoints: {
        // when window width is >= 320px
        768: {
            slidesPerView: 2,
        },
        // when window width is >= 640px
        900: {
            slidesPerView: 3,
        }
    },
    ...settings,
});