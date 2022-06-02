<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Hamburger</title>
  <meta name="description" content="ハンバーガーサイト">
  <!-- リセットcss -->
  <link rel="stylesheet" href="https://github.com/filipelinhares/ress.git">
  <link rel="stylesheet" href="css/style.css">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="c-grid">
    <div class="l-contents">
      <!-- ヘッダー -->
      <header class="l-header">
        <div class="l-header__inner">
          <h1 class="l-header__title">Hamburger</h1>
          <form class="p-form" method="get" action="#">
            <input type="text" class="p-form__input">
            <input type="submit" class="p-form__submit" value="検索">
          </form>
        </div> <!-- /inner -->
        <button class="l-header__menu">Menu</button>
      </header> <!-- /header -->

      <!-- メインコンテンツエリア -->
      <main class="l-main__wrapper">
        <article class="p-main">
          <!-- keyVisual -->
          <section class="p-keyVisual">
            <h2 class="p-keyVisual__title">ダミーサイト</h2>
          </section> <!-- /keyVisual -->

          <!-- service -->
          <section class="p-service">
            <div class="p-service c-container">
              <div class="p-service__menu--takeout">
                <!-- TakeOutここから -->
                <a href="#" class="p-service__inner">
                  <h2 class="p-service__top">Take Out</h2>
                  <div class="p-service__bottom">
                    <div class="p-service__box">
                      <p class="p-service__title">Take Out</p>
                      <p class="p-service__text">
                        当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
                      </p>
                    </div>
                    <div class="p-service__box">
                      <p class="p-service__title">Take Out</p>
                      <p class="p-service__text">当店のテイクアウトで利用できる商品を掲載しています</p>
                    </div>
                  </div>
                </a>
              </div><!-- TakeOutここまで -->
              <div class="p-service__menu--eatin">
                <!-- EatInここから -->
                <a href="#" class="p-service__inner">
                  <h2 class="p-service__top">Eat In</h2>
                  <div class="p-service__bottom">
                    <div class="p-service__box">
                      <p class="p-service__title">Eat In</p>
                      <p class="p-service__text">当店のイートインで利用できる商品を掲載しています</p>
                    </div>
                    <div class="p-service__box">
                      <p class="p-service__title">Eat In</p>
                      <p class="p-service__text">当店のイートインで利用できる商品を掲載しています</p>
                    </div>
                  </div>
                </a>
              </div><!-- EatInここまで -->
            </div>
          </section>
        </article>

        <!-- access -->
        <section class="p-access">
          <!-- 黒背景(下から①) -->
          <div class="p-access__inner">
            <!-- map(下から②) -->
            <div class="p-access__contents">
              <!-- グレー背景(下から③) -->
              <h2 class="p-access__title">見出しが入ります</h2>
              <p class="p-access__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- サイドバー -->
    <aside class="l-sidebar p-sidebar">
      <h2 class="p-sidebar__menu">Menu</h2>
      <button class="p-sidebar__close c-close">
        <span class="c-close--line1">閉じるボタン</span>
        <span class="c-close--line2">閉じるボタン</span>
      </button>
      <h3 class="p-sidebar__unit"><a href="#"></a>バーガー</h3>
      <ul class="p-sidebar__list">
        <li>ハンバーガー</li>
        <li>チーズバーガー</li>
        <li>テリヤキバーガー</li>
        <li>アボカドバーガー</li>
        <li>フィッシュバーガー</li>
        <li>ベーコンバーガー</li>
        <li>チキンバーガー</li>
      </ul>
      <h3 class="p-sidebar__unit"><a href="#"></a>サイド</h3>
      <ul class="p-sidebar__list">
        <li>ポテト</li>
        <li>サラダ</li>
        <li>ナゲット</li>
        <li>コーン</li>
      </ul>
      <h3 class="p-sidebar__unit"><a href="#"></a>ドリンク</h3>
      <ul class="p-sidebar__list">
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶（Ice/Hot）</li>
        <li>コーヒー（Ice/Hot）</li>
      </ul>
    </aside>

    <!-- フッター -->
    <footer class="l-footer">
      <ul class="l-footer__ul">
        <li class="l-footer__li"><a href="#">ショップ情報</a></li>
        <span class="l-footer__ul--partition c-partition"></span>
        <li class="l-footer__li"><a href="#">ヒストリー</a></li>
      </ul>
      <div class="l-footer__copy">Copyright: RaiseTech</div>
    </footer>

  </div>
  <div class="c-cover"></div>
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/script.js"></script>


</body>

</html>
