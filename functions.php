<?php
  //テーマサポート
  add_theme_support( 'title-tag' ); //<title>タグを出力する
  add_theme_support( 'post-thumbnails' ); //アイキャッチ画像を出力する
  add_theme_support( 'menus' );

  //タイトル出力
  function WP_Hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
      $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名を表示
    } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
      $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルを表示
    }
    return $title;
    }
  add_filter( 'pre_get_document_title', 'WP_Hamburger_title' );

  //sidebar
  function WP_Hamburger_widgets_init() {
    register_sidebar (
      array (
        'name'          => 'All Menu',
        'id'            => 'menu_widget',
        'description'   => 'メニューの一覧です',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="c-category-title">',
        'after_title'   => "</h2>\n",
      )
    );
  }
  add_action( 'widgets_init', 'WP_Hamburger_widgets_init');


  //ナビゲーションメニューを複数設定する
  function register_WP_Hamburger_menus() {
    register_nav_menus(array(
      'side-menu' => 'SideMenu',
      'footer-menu' => 'FooterMenu',
    ));
  }
  add_action( 'after_setup_theme','register_WP_Hamburger_menus');


  //style,script出力
  function WP_Hamburger_script() {
    wp_enqueue_style( 'google-font-common', '//fonts.googleapis.com', array() );
    wp_enqueue_style( 'google-font-common02', '//fonts.gstatic.com', array() );
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap', array() );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array() );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'reset', '//github.com/filipelinhares/ress.git', array() );
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", '3.6.0', true );
    wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'WP_Hamburger_script' );
