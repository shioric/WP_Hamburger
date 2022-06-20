<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力する -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <!-- WordPress側でclassを付与 -->
  <?php wp_body_open(); ?>
  <div class="c-grid">
    <div class="l-contents">
      <!-- ヘッダー -->
      <header class="l-header">
        <div class="l-header__inner">
          <h1 class="l-header__title">
            <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a>
          </h1>
          <?php get_search_form(); ?>
        </div> <!-- /inner -->
        <button class="l-header__menu">Menu</button>
      </header> <!-- /header -->
