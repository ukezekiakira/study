

<?php get_header();
the_post();
 ?>

 <?php
 /* Template Name: 商品内容
Template Post Type: post, page, event*/ 
?>


 <div class="main-content">

    <h2>ここはカスタム投稿ページですよ。</h2>
    
    <p><?php the_field("day"); ?></p>
    <p><?php the_field("content"); ?></p>
    <img src="<?php the_field("img"); ?>" alt="" class="day__img">
</div>
<?php get_footer(); ?>