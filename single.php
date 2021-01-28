<?php
 /* Template Name: 商品内容
Template Post Type: post, page, event*/ 
?>
<?php get_header(); ?>

<?php the_title(); ?>
<?php the_content(); ?>
<?php the_post_thumbnail('category-thumb'); ?>

<?php get_footer(); ?>