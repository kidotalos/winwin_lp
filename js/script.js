var mql = window.matchMedia('(max-width: 480px)');
var swiper = null;

function initSwiper() {
  if (mql.matches) {
    /* ビューポートが 600px 幅より狭い */
    swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      initialSlide: 1,
      centeredSlides: true,
      spaceBetween: 24,
    //   navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //     },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        }
    });
  } else {
    /* ビューポートが 600px 幅より広い */
    if (swiper) {
      swiper.destroy();
    }
  }
}

mql.addListener(initSwiper);
initSwiper();