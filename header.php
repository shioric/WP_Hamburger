<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力する -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- リセットcss -->
  <!-- <link rel="stylesheet" href="https://github.com/filipelinhares/ress.git"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> -->
  <!-- フォント -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet"> -->
  <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="c-grid">
    <div class="l-contents">
      <!-- ヘッダー -->
      <header class="l-header">
        <div class="l-header__inner">
          <!-- <h1 class="l-header__title"><?php bloginfo( 'name' ); ?></h1> -->
          <h1 class="l-header__title">
            <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a>
          </h1>
          <?php get_search_form(); ?>
        </div> <!-- /inner -->
        <button class="l-header__menu">Menu</button>
      </header> <!-- /header -->
