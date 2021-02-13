var mql = window.matchMedia('(max-width: 600px)');
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

// $(function() {
//     //swiper 768以下で起動
//     var swiper; 
//     $(window).on('load resize', function(){
//         var w = $(window).width();
//         if (w <= 768) {
//             if (swiper) {
//                 return;
//             } else {
//                 swiper = new Swiper('.swiper-container', {
//                     loop: true,
//                     pagination: {
//                         el: '.swiper-pagination',
//                         clickable: true,
//                     },
//                 });
//             }
//         } else {
//             if (swiper) {
//                 swiper.destroy();
//                 swiper = undefined;
//             } 
//         } 
//     });
// }); 