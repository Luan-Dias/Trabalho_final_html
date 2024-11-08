
const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
  });