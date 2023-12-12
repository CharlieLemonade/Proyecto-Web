var swiper = new Swiper(".slide-content", {
    slidesPerView: 2,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    centeredSlide:'true',
    fade:'true',
    grarCursor:'true',
        keyboard: {
      enabled: true,
    },
    breakpoints: {
      769 : {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets:true,
      },
  });