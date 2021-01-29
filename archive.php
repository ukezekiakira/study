<?php get_header();?>
    <div class="main-content">
    <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                 <!-- 繰り返し処理する内容 -->
                 <a href="<?php the_permalink( ); ?>">
                 <div class="post" >
                     
                 <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="post__img">

                    <div class="post__content">
                        <h2 class="post__content"><?php the_title(); ?></h2>
                        <?php echo "<p class='post_text'>" . get_the_excerpt() . "</p>"; ?>
                        <a href="#"><?php the_category(); ?></a>
                        <a href="#"><?php the_time(); ?></a>
                    </div>
                </div>
                </a>
            <?php endwhile; ?>
            <?php else: ?>
             <!-- 投稿データが取得できない場合の処理 -->
            <?php endif; ?>
    </div>



<?php get_footer();?>
