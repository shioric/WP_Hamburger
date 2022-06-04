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
        <article class="p-archive-main">

          <!-- keyVisual -->
          <section class="p-archiveKv">
            <h2 class="p-archiveKv__title">Menu:</h2>
            <p class="p-archiveKv__subtitle">チーズバーガー</p>
          </section> <!-- /keyVisual -->

          <div class="c-container">
            <article class="p-archive-desc">
              <h2 class="p-archive-desc__title">小見出しが入ります</h2>
              <p class="p-archive-desc__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </article>

            <article class="p-card">
              <img src="img/cheese-burger.jpg" alt="チーズバーガー" class="p-card__image-sp">
              <img src="img/cheese-burger_tab.jpg" alt="チーズバーガー" class="p-card__image-tab">
              <div class="p-card__desc">
                <h3 class="p-card__desc--title">チーズバーガー</h3>
                <h4 class="p-card__desc--subtitle">小見出しが入ります</h4>
                <p class="p-card__desc--text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <button class="p-card__desc--button">詳しく見る</button>
              </div>
            </article>

            <article class="p-card">
              <img src="img/cheese-burger.jpg" alt="ダブルチーズバーガー" class="p-card__image-sp">
              <img src="img/cheese-burger_tab.jpg" alt="ダブルチーズバーガー" class="p-card__image-tab">
              <div class="p-card__desc">
                <h3 class="p-card__desc--title">ダブルチーズバーガー</h3>
                <h4 class="p-card__desc--subtitle">小見出しが入ります</h4>
                <p class="p-card__desc--text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <button class="p-card__desc--button">詳しく見る</button>
              </div>
            </article>

            <article class="p-card">
              <img src="img/cheese-burger.jpg" alt="スペシャルチーズバーガー" class="p-card__image-sp">
              <img src="img/cheese-burger_tab.jpg" alt="スペシャルチーズバーガー" class="p-card__image-tab">
              <div class="p-card__desc">
                <h3 class="p-card__desc--title">スペシャルチーズバーガー</h3>
                <h4 class="p-card__desc--subtitle">小見出しが入ります</h4>
                <p class="p-card__desc--text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <button class="p-card__desc--button">詳しく見る</button>
              </div>
            </article>
          </div>
        </article>

        <nav class="p-pagination">
          <p class="p-pagination__number">page 1/10</p>
          <ul class="p-pagination__list">
            <li class="p-pagination__list-item--prev">
              <a href="#" aria-label="前のページへ">前へ</a>
            </li>
            <li class="p-pagination__list-item active"><a href="#">1</a></li>
            <li class="p-pagination__list-item"><a href="#">2</a></li>
            <li class="p-pagination__list-item"><a href="#">3</a></li>
            <li class="p-pagination__list-item"><a href="#">4</a></li>
            <li class="p-pagination__list-item"><a href="#">5</a></li>
            <li class="p-pagination__list-item"><a href="#">6</a></li>
            <li class="p-pagination__list-item"><a href="#">7</a></li>
            <li class="p-pagination__list-item"><a href="#">8</a></li>
            <li class="p-pagination__list-item"><a href="#">9</a></li>
            <li class="p-pagination__list-item--next">
              <a href="#" aria-label="次のページへ">次へ</a>
            </li>
          </ul>
        </nav>
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
