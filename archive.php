<?php get_header(); ?>

      <!-- メインコンテンツエリア -->
      <main class="l-main__wrapper">
        <article class="p-archive-main">

          <!-- keyVisual -->
          <section class="p-archiveKv">
            <h2 class="p-archiveKv__title">Menu:</h2>
            <p class="p-archiveKv__subtitle"><?php single_cat_title(); ?></p> <!-- カテゴリーの名前を取得する -->
          </section> <!-- /keyVisual -->

          <div class="c-container">
            <article class="p-archive-desc">
              <h2 class="p-archive-desc__title"><?php single_cat_title();?></h2>
              <p class="p-archive-desc__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </article>

            <?php
            if(have_posts()):
              while(have_posts()):
                the_post(); ?>

            <article class="p-card">
              <div class="p-card__image">
              <?php the_post_thumbnail('large',array('class' =>'p-card__image' )); ?>
                <!-- <img src="img/cheese-burger.jpg" alt="チーズバーガー" class="p-card__image-sp">
                <img src="img/cheese-burger_tab.jpg" alt="チーズバーガー" class="p-card__image-tab"> -->
              </div>
              <div class="p-card__desc">
                <h3 class="p-card__desc--title"><?php the_title();?></h3>
                <h4 class="p-card__desc--subtitle">小見出しが入ります</h4>
                <p class="p-card__desc--text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <button class="p-card__desc--button">詳しく見る</button>
              </div>

            </article>
            <?php endwhile; endif; ?>
            <!-- <article class="p-card">
              <img src="../img/cheese-burger.jpg" alt="ダブルチーズバーガー" class="p-card__image-sp">
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
        </article> -->

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

    <?php get_sidebar(); ?>
    <div class="c-cover"></div>
    <?php get_footer(); ?>
