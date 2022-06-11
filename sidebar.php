<aside class="l-sidebar p-sidebar">
  <h2 class="p-sidebar__menu">Menu</h2>
  <button class="p-sidebar__close c-close">
    <span class="c-close--line1">閉じるボタン</span>
    <span class="c-close--line2">閉じるボタン</span>
  </button>
  <?php
    if( is_active_sidebar( 'menu_widget' ) ) :
      dynamic_sidebar( 'menu_widget' );
    else:
  ?>
  <div class="widget">
    <h2>No Widget</h2>
    <p>ウィジットは設定されていません。</p>
  </div>
  <?php endif; ?>
      <!-- <h3 class="p-sidebar__unit"><a href="#"></a>バーガー</h3>
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
      </ul> -->
</aside>
