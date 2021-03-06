let mySwiperX;   //Swiperインスタンスを格納する変数の宣言
let mySwiperY;
let screenWidth;  //画面幅の値を格納する変数の宣言
let swiperElementX = document.getElementById("mySlider1");  //コンテナ要素
let swiperElementY = document.getElementById("mySlider2");

let options = {   //スライダーの初期化のオプション
  loop: true,
  centeredSlides : true,
  spaceBetween: 50,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
};

function initSwiper() {
  if(swiperElementX){ //コンテナ要素があれば
    screenWidth = window.innerWidth; //画面幅を取得
    if(screenWidth < 481 && !mySwiperX ) { 
      mySwiperX = new Swiper('#mySlider1', options);  //スライダーの初期化
      mySwiperY = new Swiper('#mySlider2', options);
    } else if (screenWidth >= 481 && mySwiperX ) {
      mySwiperX.destroy(true, true);  //スライダーを破棄
      mySwiperX = null;
      mySwiperY.destroy(true, true);  //スライダーを破棄
      mySwiperY = null;
    }
  }
}
initSwiper();
window.addEventListener('resize',initSwiper);

