<?php /* Template Name: 商品内容
Template Post Type: post, page, event　*/ 
?>

<?php get_header(); ?>
<?php the_post_thumbnail('category-thumb'); ?>
<?php the_title(); ?>
<h2>ここは商品内容ページですよ。</h2>
<?php the_content(); ?>
<?php get_footer(); ?>