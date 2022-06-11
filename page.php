<?php get_header(); ?>

  <!-- メインコンテンツエリア -->
  <main class="l-main__wrapper">
    <article class="p-single-main">

      <!-- keyVisual -->
      <section class="p-pageKv">
        <h2 class="p-pageKv__title">ショップについて</h2>
      </section> <!-- /keyVisual -->

      <div class="c-container--more">

      <!-- <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?> -->

      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
          <?php the_content(); ?>
        </div>
      <?php endwhile;
      else:
      ?>
      <p>表示する記事がありません</p>
      <?php endif; ?>

      
            <!-- <article class="p-single-desc">
              <h2 class="p-single-desc__title">見出しh2</h2>
              <p class="p-single-desc__text">
                Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
              </p>
            </article>

            <div class="p-single-headeing">
              <h3 class="p-single-heading__h3">見出しh3</h3>
              <h4 class="p-single-heading__h4">見出しh4</h4>
              <h5 class="p-single-heading__h5">見出しh5</h5>
              <h6 class="p-single-heading__h6">見出しh6</h6>
            </div>

            <blockquote class="p-blockquote">
              <p class="p-blockquote__text">
                Blockquote
                引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ引用タグ引用タグ引タグ引用タグ引用タグ引用タグ
              </p>
              <p class="p-blockquote__cite">出典元：
                <a href="#">○○○○○○○○○○○○</a>
              </p>
            </blockquote>

            <img class="c-burger-wide" src="/img/cheeseburger-set-wide.jpg" alt="チーズバーガーセット">

            <div class="p-columnUnit">
              <article class="p-column">
                <div class="p-column__imgWrap">
                  <img src="/img/cheeseburger-set.jpg" alt="チーズバーガーセット">
                </div>
                <div class="p-column__body">
                  <p class="p-column__text">
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                  </p>
                </div>
              </article>

              <article class="p-column p-column--reverse">
                <div class="p-column__imgWrap">
                  <img src="/img/cheeseburger-set.jpg" alt="チーズバーガーセット">
                </div>
                <div class="p-column__body">
                  <p class="p-column__text">
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                    テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                  </p>
                </div>
              </article>
            </div>

            <img class="c-burger-normal" src="/img/cheeseburger-set.jpg" alt="チーズバーガーセット">

            <ul class="p-imgList">
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
              <li><img src="/img/cheeseburger-set.jpg" alt=""></li>
            </ul>

            <div class="p-list-ol">
              <ol class="p-list-ol__first">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ol>
              <ol class="p-list-ol__second">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
              </ol>
              <ol class="p-list-ol__third">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ol>
            </div>

            <div class="p-list">
              <ul class="p-list__first">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ul>
              <ul class="p-list__second">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
              </ul>
              <ul class="p-list__third">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ul>
            </div>

            <div class="p-code">
              <pre>
                <code>
                  &lt;html&gt;
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
                  &lt;/html&gt;
                </code>
              </pre>
            </div>

            <table class="p-table">
              <tr class="p-table__tr">
                <td class="p-table__td--first">テーブル</td>
                <td class="p-table__td--second">テーブル</td>
              </tr>
              <tr class="p-table__tr">
                <td class="p-table__td--first">テーブル</td>
                <td class="p-table__td--second">テーブル</td>
              </tr>
              <tr class="p-table__tr">
                <td class="p-table__td--first">テーブル</td>
                <td class="p-table__td--second">テーブル</td>
              </tr>
              <tr class="p-table__tr">
                <td class="p-table__td--first">テーブル</td>
                <td class="p-table__td--second">テーブル</td>
              </tr>
            </table>

            <button class="c-button-single">ボタン</button>

            <p class="c-text-bold">boldboldboldboldboldboldbold</p> -->
      </div>
    </article>


  </main>
  </div>
<?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>
