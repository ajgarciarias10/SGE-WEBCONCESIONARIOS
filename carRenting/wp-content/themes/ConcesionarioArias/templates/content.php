   <?php 
    get_header();
    global $PostImg;
?>
<div class="col-sm-6 col-md-4 col-lg-6 mb-30 pb-xs-30">
            <div class="post-prev-img">
                  <a href="<?php the_permalink()?>"><img src="<?php echo $PostImg ?>" alt="<?php get_the_title() ?>"/></a>
            </div>
            <div class="post-prev-title font-alt">
                <a href="<?php the_permalink()?>"><?php the_title();?></a>
            </div>
            <div class="post-prev-info font-alt">
                <a href="<?php the_permalink()?>"><?php the_author_posts_link(); ?></a> | <?php the_time('M j, Y') ?> | <?php comments_number('0 comments', '1 comment', '% comments'); ?>
            </div>
            <div class="post-prev-text">
                 <?php echo the_excerpt() ?>
            </div>
             <a href="<?php the_permalink()?>" class="btn btn-mod btn-border btn-round btn-medium">Read More</a>
</div>