<?php /* Template Name: 会社概要 
Template Post Type: post, page, event　*/ 
?>

<?php get_header(); ?>
<?php the_post_thumbnail('category-thumb'); ?>
<?php the_title(); ?>
<h2>ここは会社概要ページですよ。</h2>
<?php the_content(); ?>
<?php get_footer(); ?>