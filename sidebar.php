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
</aside>
