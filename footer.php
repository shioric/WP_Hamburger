<!-- フッター -->
<footer class="l-footer">
  <ul class="l-footer__ul">

    <!-- <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu'
      ));
    ?> -->

    <li class="l-footer__li"><a href="<?php echo get_page_link(2130); ?>">ショップ情報</a></li>
    <span class="l-footer__ul--partition c-partition"></span>
    <li class="l-footer__li"><a href="<?php echo get_page_link(2126); ?>">ヒストリー</a></li>
  </ul>
  <div class="l-footer__copy">Copyright: <?php bloginfo('name'); ?> 2022</div>
</footer>

  </div>

  <!--jQuery-->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!-- <script src="js/script.js"></script> -->


  <?php wp_footer(); ?>
</body>

</html>
