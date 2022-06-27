<?php get_header(); ?>

<!-- メインコンテンツエリア -->
<main class="l-main__wrapper">
  <article class="p-archive-main">

    <!-- keyVisual -->
    <section class="p-archiveKv">
      <h2 class="p-archiveKv__title">Search:</h2>
      <p class="p-archiveKv__subtitle"><?php echo get_search_query(); ?></p>
    </section> <!-- /keyVisual -->

    <div class="c-container">
      <article class="p-archive-desc">
        <h2 class="p-archive-desc__title"><?php echo category_description(); ?></h2>
        <!-- <h2 class="p-archive-desc__title"><?php single_cat_title(); ?></h2> -->
        <!-- <p class="p-archive-desc__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p> -->
        <!-- <?php get_template_part('components/search'); ?> -->
      </article>

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>

          <article class="p-card">
            <div class="p-card__image" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_post_thumbnail('large', array('class' => 'p-card__image')); ?>
            </div>
            <div class="p-card__desc">
              <h3 class="p-card__desc--title"><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
              <!-- 抜粋を表示 -->
              <!-- <a href="<?php the_permalink(); ?>">詳しく見る</a> -->
              <button class="p-card__desc--button" type="button" onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button>
            </div>
          </article>
        <?php endwhile;
      else :
        ?><p>表示する記事がありません</p>
      <?php endif; ?>


      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>

</main>
</div>

<?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>
