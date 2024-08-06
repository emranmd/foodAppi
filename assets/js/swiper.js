var swiper = new Swiper(".banner_swiper", {
    cssMode: true,
    autoplay:{
      delay: 2500
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable:true
    },
    mousewheel: true,
    keyboard: true,
});

/*/~~~~~~~~~~~~~~~~ swiperBannerEnd ~~~~~~~~~~~~~~~/*/

var swiper = new Swiper(".swiper_categoryCarousel", {
    slidesPerView: 7,
    spaceBetween: 20,
});

/*/~~~~~~~~~~~~~~~~ swiper_categoryEnd ~~~~~~~~~~~~~~~/*/

/*/~~~~~~~~~~~~~~~~ itemsAddonsStart ~~~~~~~~~~~~~~~/*/

var swiper = new Swiper(".addons_swiper", {
  slidesPerView: 1,
  spaceBetween: 15,
});

/*/~~~~~~~~~~~~~~~~ itemsAddonsEnd ~~~~~~~~~~~~~~~/*/

/*/~~~~~~~~~~~~~~~~ deliveryTimeFrameStart ~~~~~~~~~~~~~~~/*/

var swiper = new Swiper(".timeFrameBtn", {
  slidesPerView: 2.5,
  spaceBetween: 15,
});

/*/~~~~~~~~~~~~~~~~ deliveryTimeFrameEnd ~~~~~~~~~~~~~~~/*/