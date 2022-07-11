<?php get_header(); ?>

      <!-- メインコンテンツエリア -->
      <main class="l-main__wrapper">
        <article class="p-single-main">

          <!-- keyVisual -->
          <section class="p-singleKv">
            <h2 class="p-singleKv__title"><?php the_title(); ?></h2>
            <!-- <?php if( has_post_thumbnail()) {
              the_post_thumbnail();
            } elseif( is_singular() ) {
              echo '<img src="' . esc_attr( get_template_directory_uri() ) . '/img/singleKv-pc.jpg" alt="メインビジュアル">';
            }
            ?> -->
          </section> <!-- /keyVisual -->

          <div class="c-container--more">

          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
              <?php the_content(); ?>
            </div>
          <?php endwhile;
          else:
          ?>
          <p>表示する記事がありません</p>
          <?php endif; ?>


          </div>
        </article>
      </main>
    </div>

    <?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>
