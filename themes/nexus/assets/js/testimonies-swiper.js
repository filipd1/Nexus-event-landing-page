document.addEventListener("DOMContentLoaded", () => {
    const swiperEl = document.querySelector(".mySwiper");
    if (!swiperEl) return;

    new Swiper(swiperEl, {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        navigation: {
            nextEl: ".btn-right",
            prevEl: ".btn-left",
        },
    });
});
