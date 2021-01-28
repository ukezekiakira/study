<?php
 /* Template Name: 商品内容
Template Post Type: post, page, event*/ 
?>
<br>
<br>
<br>
<br>
<br>
<?php get_header();
the_post();
?>
<?php the_post_thumbnail('category-thumb'); ?>
<h2>ここは商品内容ページですよ。</h2>
<p><?php the_field("day"); ?></p>
    <p><?php the_field("content"); ?></p>
    <img src="<?php the_field("img"); ?>" alt="">
<?php get_footer(); ?>