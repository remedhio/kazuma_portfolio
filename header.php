<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/index.css">

    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!-- bodyに独自のクラス追加 -->
  <header>
  <!-- headerの記述をする -->
  </header>
