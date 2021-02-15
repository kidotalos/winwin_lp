<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <meta name="description" content="">
        <!-- swiperのcssを読み込む -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/practice.css" />

    </head>

    <body>
        <h1>きょろさんラブ</h1>
    <section class="section">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide winwin_content">
                <h2 class="content_title">この瞬間に出会いたい、、</h2>
                <img class="content_img" src="img/content1.jpg">
                <p class="content_text">WinWinでは<span class="content_span">「リアルタイム」</span><br>で近くのユーザーが表示されます！<br>その日のうちにマッチングできるアプリです！</p>
                <h1>早い!</h1>
            </div>
            <div class="swiper-slide winwin_content">
                <h2 class="content_title">友達といるけど、、</h2>
                <img class="content_img" src="img/content2.jpg">
                <p class="content_text">WinWinでは<span class="content_span">「友達同士」</span><br>でのマッチングを実現するため、全てのユーザーが２人以上です！(最大５人まで)</p>
                <h1>複数人!！</h1>
            </div>
            <div class="swiper-slide winwin_content">
                <h2 class="content_title">場所を気にしたくない、、</h2>
                <img class="content_img" src="img/content3.jpg">
                <p class="content_text">WinWinでは<span class="content_span">「遊びたい場所」</span><br>で人の目を気にせずに遊べます！<br>場所や時間に縛られずに楽しみましょう！</p>
                <h1>どこでも！!！</h1>
            </div>
        </div>
        <!-- ボタン表示 -->
        <!-- <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div> -->
        <!-- ページネーション -->
	    <div class="swiper-pagination"></div>
    </div>
    </section>
    <!-- swiperのjsを読み込む -->
    <script type="text/javascript" src="js/practice.js"></script>
    <script src="js/swiper.min.js"></script>
    <!-- <script>
        var swiper = new Swiper('.swiper-container');
        var swiper = new Swiper('.swiper-container', {
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }  
        });
        var mySwiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            }
        });
    </script> -->
    <!-- <script type="text/javascript" src="js/practice.js"></script> -->
    </body>
</html>
