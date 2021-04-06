<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>WinWin</title>
        <meta name="description" content="5Gの出会いを友達と体感!!友達といる時にグループ同士で出会えたら楽しそうじゃないですか??福岡の夜を友達と楽しみたいならこのアプリしかない!!">
        <!-- レスポンシブデザイン用のタグ -->
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- font-awsomeのCDNを読み込む -->
        <script src="https://kit.fontawesome.com/97b765f07d.js" crossorigin="anonymous"></script>
        <!-- アイコンの画像表示 -->
        <link rel="icon" href="img/winwin-icon.png" sizes="16x16" type="image/png" />

        <!-- レスポンシプ用のタグ -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- cssを読み込む(swiperのcssを先に読み込む) -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <!-- adobeのフォント -->
        <script>
          (function(d) {
            var config = {
              kitId: 'her3jaq',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>
        <script>
          (function(d) {
            var config = {
              kitId: 'her3jaq',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- ファーストビューの実装 -->
        <div class="lp_first_view">
            <img class="lp_profile" src="img/profile2.png" alt="プロフィール画像">
            <img class="lp_winwin" src="img/winwin_top.PNG" alt="アプリのロゴ">
            <span class="lp_span">いつまで相席屋に行っとーと！？</span>
            <p class="main_ward">好きな時間に<br><span class="lp_main">好きな場所で</span></p>
            <div class="registration">
                <div class="terms_of_service_privacy">
                    <p>
                    <a class="terms_of_service" href="WinWin_termsofservice.html">利用規約</a>
                    および
                    <a class="privacy" href="WinWin_privacy.html">プライバシーポリシー</a>
                    に同意して</p>
                </div>
                <a href="http://localhost/landing.php" class="lp_first_button">今すぐ簡単無料登録！</a>
                <div class="r_img">
                    <img class="first_apple" src="img/apple.png" alt="アップルストアの画像">
                    <img class="first_google" src="img/google.png" alt="グーグルストアの画像">
                </div>
            </div>
        </div>
        <!-- レスポンシブのためのクラス -->
        <div class="for_res_link">
            <div class="terms_of_service_privacy">
                <p>
                <a class="terms_of_service" href="WinWin_termsofservice.html">利用規約</a>
                および
                <a class="privacy" href="WinWin_privacy.html">プライバシーポリシー</a>
                に同意して</p>
            </div>
            <div class="subsc_for_res">
                <a href="http://localhost/landing.php" class="lp_first_button_for_res">今すぐ簡単無料登録！</a>
            </div>
            <div class="first_img_for_res">
                <img class="first_applefor_res" src="img/apple.png" alt="アップルストアの画像">
                <img class="first_googlefor_res" src="img/google.png" alt="グーグルストアの画像">
            </div>
        </div>
        <!-- WinWinとはの実装 -->
        <div class="lp_what_is_winwin">
                <div class="what_is_winwin">
                    <img class="what_is_winwin_title_img" src="img/winwin_cloud_res.jpg" alt="雲の画像">
                    <div class="what_is_winwin_title">
                        <p> <span class="what_is_winwin_span">WinWin </span><br class="for_res_br">の特徴とは？</p>
                    </div>
                        <h1 class="what_is_winwin_description">友達といる時など「グループ」での<br>マッチングに特化したアプリです</h1>
                </div>
                <!-- こっからコンテンツ部分 -->
                <!-- winwinとはのほう -->
                <!-- swiperのためのコンテナ -->
                <div class="container_what">
                    <!-- .jsで使用するためidを付与 -->
                    <div class="swiper-container what" id="mySlider1">
                        <!-- こっからコンテンツを表示するクラス -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide winwin_content">
                                <div class="for_padding">
                                    <i class="fas fa-history awsome"></i>
                                    <h2 class="content_title">すぐに出会える</h2>
                                    <img class="content_img" src="img/content1.jpg" alt="すぐに会える">
                                    <p class="content_text">WinWinでは<span class="content_span">「リアルタイム」</span>で<br>近くのユーザーが表示されます！<br>その日のうちにマッチングができ、出会う<br>までの負担を最大限に減らしています！</p>
                                </div>
                            </div>
                            <div class="swiper-slide winwin_content">
                                <div class="for_padding">
                                    <i class="fas fa-user-friends awsome"></i>
                                    <h2 class="content_title">友達と一緒で安心できる</h2>
                                    <img class="content_img" src="img/content2.jpg" alt="友達と一緒で安心できる">
                                    <p class="content_text">WinWinでは<span class="content_span">「友達同士」</span>での<br>ご利用が可能となっております。<br>そのため１人では不安な女性でも<br>安心してご利用いただけます！</p>
                                </div>
                            </div>
                            <div class="swiper-slide winwin_content">
                                <div class="for_padding">
                                    <i class="fas fa-map-marker-alt awsome"></i>
                                    <h2 class="content_title">場所を自由に選べる</h2>
                                    <img class="content_img" src="img/content3.jpg" alt="場所を自由に選べる">
                                    <p class="content_text">WinWinでは<span class="content_span">「好きな場所」</span>で<br>人の目を気にせずに遊べます！<br>「相席屋で喋るだけでつまんなかった」<br>なんてことはもう言わせません！</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
        </div>
        <!-- 使い方説明の部分 -->
        <div class="lp_how_to_use">
            <!-- 使い方のタイトル部分 -->
            <div class="how_to_use_title">
                <img class="how_to_use_img" src="img/winwin_cloud.jpg" alt="雲の画像">
                <h2>How To Use?</h2>
                <p>使い方はかんたん</p>
            </div>
            <!-- 使い方のタイトル部分 -->
            <!-- winwinの使い方のほう -->
            <!-- swiperのためのコンテナ -->
            <div class="container_how">
                <!-- .jsで使用するためidを付与 -->
                <div class="swiper-container" id="mySlider2">
                    <!-- こっからコンテンツを表示するクラス -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide how_to_content">
                            <p class="how_to_No">01</p>
                            <img class="how_to_content_img" src="img/HowTo1.png" alt="グループ検索">
                            <h3>まずは近くにいる<br>グループを検索します</h3>
                            <p class="how_to_description">近くにいるグループを探します。<br>相手グループの条件から理想の<br>グループを探しましょう。</p>
                        </div>
                        <div class="swiper-slide how_to_content">
                            <p class="how_to_No">02</p>
                            <img class="how_to_content_img" src="img/HowTo2.png" alt="「良いね！」を送る">
                            <h3>「良いね！」を送って<br>相手グループにアピール</h3>
                            <p class="how_to_description">気になったグループに「良いね！」を送って<br>承認されるとチャットができます。</p>
                        </div>
                        <div class="swiper-slide how_to_content">
                            <p class="how_to_No">03</p>
                            <img class="how_to_content_img" src="img/HowTo3.png" alt="すぐに会える">
                            <h3>マッチングが成立後<br>すぐ会える</h3>
                            <p class="how_to_description">マッチング後にチャットで<br>場所を決めるだけで会うことができます！<br>出会うまでの負担を最大限に減らしています。</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- フッターの部分 -->
        <div class="lp_footer">
            <div class="footer_main">
                <div class="questions">
                    <div class="text1">
                        <img class="" src="img/footer_cloud1.png" alt="簡単に出会える">
                    </div>
                    <div class="text2">
                        <img class="" src="img/footer_cloud2.png" alt="友達といる時に使える">
                    </div>
                    <div class="text3">
                        <img class="" src="img/footer_cloud3.png" alt="友達と一緒だから安心">
                    </div>
                </div>
                <div class="download">
                    <div class="download_text">
                        <p>友達とおるとに</p>
                        <h1>WinWin使っとらんとー？</h1>
                    </div>
                    <div class="download_img">
                        <img class="footer_apple" src="img/apple.png" alt="アップルストアの画像">
                        <img class="footer_google" src="img/google.png" alt="グーグルストアの画像">
                    </div>
                </div>
            </div>
        <div class="footer_sub">
            <img class="footer_winwin" src="img/winwin_footer.PNG" alt="雲の画像">
            <p>Copyright © 2021 YOLO Inc. All Rights Reserved.</p>
            <p>運営会社　｜　個人情報保護方針</p>
        </div>
        </div>
        <!-- jsを読み込む(swiperのjsを先に読み込む) -->
        <script src="js/swiper.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
