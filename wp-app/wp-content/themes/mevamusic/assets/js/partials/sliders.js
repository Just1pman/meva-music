const settings = {
    loop: true,
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
    spaceBetween: 30,
    autoplay: true,
    slidesPerView: "auto",
    ...settings,
});

new Swiper(".wide-swiper", {
    spaceBetween: 30,
    autoplay: true,
    slidesPerView: 1,
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        900: {
            slidesPerView: 3,
        }
    },
    ...settings,
});

new Swiper(".tracks-swiper", {
    autoplay: false,
    ...settings,
});