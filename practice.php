<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>test</title>
        <meta name="description" content="">
        <!-- レスポンシブデザイン用のタグ -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- cssを読み込む(swiperのcssを先に読み込む) -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/practice.css">
    </head>

    <body>
        <!-- winwinとはのほう -->
        <!-- swiperのためのコンテナ -->
        <div class="container_what">
            <!-- .jsで使用するためidを付与 -->
            <div class="swiper-container what" id="mySlider1">
                <!-- こっからコンテンツを表示するクラス -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide winwin_content">
                        <div class="test">
                        <h2 class="content_title">この瞬間に出会いたい、、</h2>
                        <img class="content_img" src="img/content1.jpg">
                        <p class="content_text">WinWinでは<span class="content_span">「リアルタイム」</span><br>で近くのユーザーが表示されます！<br>その日のうちにマッチングできるアプリです！</p>
                        <h1>早い!</h1>
                        </div>
                    </div>
                    <div class="swiper-slide winwin_content">
                        <div class="test">
                        <h2 class="content_title">友達といるけど、、</h2>
                        <img class="content_img" src="img/content2.jpg">
                        <p class="content_text">WinWinでは<span class="content_span">「友達同士」</span><br>でのマッチングを実現するため、全てのユーザーが２人以上です！(最大５人まで)</p>
                        <h1>複数人!！</h1>
                        </div>
                    </div>
                    <div class="swiper-slide winwin_content">
                        <div class="test">
                        <h2 class="content_title">場所を気にしたくない、、</h2>
                        <img class="content_img" src="img/content3.jpg">
                        <p class="content_text">WinWinでは<span class="content_span">「遊びたい場所」</span><br>で人の目を気にせずに遊べます！<br>場所や時間に縛られずに楽しみましょう！</p>
                        <h1>どこでも！!！</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        
        <!-- winwinの使い方のほう -->
        <!-- swiperのためのコンテナ -->
        <div class="container_how">
            <!-- .jsで使用するためidを付与 -->
            <div class="swiper-container" id="mySlider2">
                <!-- こっからコンテンツを表示するクラス -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide how_to_content">
                        <p class="how_to_No">01</p>
                        <img class="how_to_content_img" src="img/HowTo1.png">
                        <h3>まずは近くにいる<br>グループを検索します</h3>
                        <p class="how_to_description">近くにいるグループを探します。<br>相手グループの条件から理想の<br>グループを探しましょう。</p>
                    </div>
                    <div class="swiper-slide how_to_content">
                        <p class="how_to_No">02</p>
                        <img class="how_to_content_img" src="img/HowTo2.png">
                        <h3>「良いね！」を送って<br>相手グループにアピール</h3>
                        <p class="how_to_description">気になったグループに「良いね！」を送って<br>マッチングをしましょう。</p>
                    </div>
                    <div class="swiper-slide how_to_content">
                        <p class="how_to_No">03</p>
                        <img class="how_to_content_img" src="img/HowTo3.png">
                        <h3>マッチングが成立後<br>すぐ会える</h3>
                        <p class="how_to_description">WinWinの最大の特徴は<br>マッチング後にメッセージで<br>場所を決めるだけで会えること！<br>出会うまでの負担を最大限に減らしています。</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <!-- jsを読み込む(swiperのjsを先に読み込む) -->
    <script src="js/swiper.min.js"></script>
    <script src="js/practice.js"></script>
    </body>
</html>
