<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
ohayou
<img src="https://atnd.org/event_images/0000/6247/web%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A9%E3%83%A0_original.png">
guuuu

<?php include('date.php'); ?>

 <?php if(have_posts()): while(have_posts()): the_post(); ?>
       <?php include('loop.php'); ?>
    <?php endwhile; endif; ?><!--ループ終了-->
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>