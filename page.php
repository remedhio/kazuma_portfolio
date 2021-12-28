<?php 
/*----------------------
  固定ページ
-----------------------*/
get_header(); ?>
<div class="default-page">
<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
      <p class="default-page__title"><?php the_title(); ?></p><!-- title出力 -->
      <div class="default-page__content">
        <?php the_content(); ?><!-- 本文出力 -->
      </div>
    <?php } ?>
  <?php } ?>
</div>
<?php get_footer(); ?>