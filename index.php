<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
       <?php include('loop.php'); ?>
    <?php endwhile; endif; ?><!--ループ終了-->
    <?php wp_reset_postdata(); ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
keisuke

<?php include('date.php'); ?>

Hello ほりとも！！！
