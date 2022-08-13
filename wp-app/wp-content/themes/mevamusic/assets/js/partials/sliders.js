const settings = {
    autoplay: true,
    spaceBetween: 30,
    grabCursor: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
}

new Swiper('.aboutUsSlider', {
    slidesPerView: 1,
    ...settings,
});

new Swiper(".wide-swiper", {
    slidesPerView: "auto",
    ...settings,
});