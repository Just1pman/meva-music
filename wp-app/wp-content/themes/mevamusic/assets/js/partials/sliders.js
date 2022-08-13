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
    slidesPerView: 1,
    ...settings,
});

new Swiper(".wide-swiper", {
    slidesPerView: "auto",
    ...settings,
});