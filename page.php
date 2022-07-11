<?php get_header(); ?>

  <!-- メインコンテンツエリア -->
  <main class="l-main__wrapper">
    <article class="p-single-main">

      <!-- keyVisual -->
      <section class="p-pageKv">
        <h2 class="p-pageKv__title"><?php the_title(); ?></h2>
      </section> <!-- /keyVisual -->

      <div class="c-container--more">
        <div class="p-post">
          <?php if(have_posts()): //もし投稿データがあったら
            while(have_posts()): //以下を繰り返す
            the_post(); ?>
              <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>> <!-- 投稿に自動でクラスを付与 -->
                <?php the_content(); ?> <!-- 投稿があるときに表示させる内容はこれ -->
              </div>
          <?php endwhile; //繰り返しはここまで。まだデータが有るときはwhileに戻る
          else: //投稿がなければ
          ?>
          <p>表示する記事がありません</p> <!-- 投稿がないときはこちらを表示 -->
          <?php endif; ?> <!-- 条件分岐ここまで -->
        </div>
      </div>
    </article>


  </main>
  </div>
<?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>
