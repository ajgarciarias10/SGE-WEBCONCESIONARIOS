<?php 
    get_header();
    the_post(); //SOLO NOS VA  A PERMITIR ENTRAR A LAS PROPIEDADES DEL POST
    $post_id = $post->ID;
     add_num_visit($post_id);
    //Conseguir el array con todas las categorias del post
    $cats = wp_get_post_categories($post ->ID);
  
   
?>
<body class="appear-animate">
<!-- Start Loader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>
<!-- End Loader -->
<!-- Start Page Wrapper -->
<div class="page" id="top">
<?php	get_template_part('nav');?>
<?php
               if( has_post_thumbnail() ){
                        $PostImg = get_the_post_thumbnail_url();
                        }else{
                        $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    }
?>                    
<section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo $PostImg?>">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"><?php the_title();?></h1>
                     <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"></h1>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Blog')->ID)?>">Blog</a> / <span>Car Renting</span>
                    </div>
                </div>
            </div>
        </div>
</section>
 <section class="page-section">
        <div class="container relative">
            <div class="row">
                <!-- Start Content -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i><?php echo get_num_visits($post_id)?></a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></a>
                            <span class="separator">&nbsp;</span>

                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> <?php comments_number('0 comments, 1 comments, % comments ');?></a>
                        </div>
                    <div class="blog-item mb-0">
                            <?php the_content()?>
                            <div class="container relative">
            <h2 class="section-title font-alt mt-0 mb-10 mb-sm-10">Related Posts</h2>
            
            <div class="row display-none-xs display-none-sm mb-10">
                <div class="col-md-8 offset-md-2">
                    <div class="section-text align-center mb-10 mb-xs-10">
                        
                    </div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <?php
                                $args= array(
                                'post_per_parge'=>3,
                                'post__not_in' => array($post_id),
                                'category__in' => $cats);
                                $related = new WP_Query($args);
                                if($related->have_posts()):
                                while($related->have_posts()):
                                $related->the_post();
                                if( has_post_thumbnail() ){
                                $PostImg = get_the_post_thumbnail_url();
                                }else{
                                $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                                }
                ?>
               
                <div class="col-sm-6 col-md-4 col-lg-4 mb-0 mb-sm-30 pb-xs-30">
                    <div class="post-prev-img">
                        <a href="<?php the_permalink()?>"><img src="<?php echo $PostImg ?>" alt="<?php get_the_title() ?>"/></a>
                    </div>
                    <div class="post-prev-title font-alt">
                        <a href="<?php the_permalink()?>"><?php the_title();?></a>
                    </div>
                    <div class="post-prev-info font-alt">
                        <a href="<?php the_permalink()?>"><?php the_author_posts_link(); ?></a> | <?php the_time('M j, Y') ?> | <?php comments_number( 'no responses', 'one response', '% responses' ); ?>
                    </div>
                    <div class="post-prev-text">
                        <?php echo the_excerpt() ?>
                    </div>
                    <a href="<?php the_permalink()?>" class="btn btn-mod btn-border btn-round btn-medium">Read More</a>
                </div>
             	<?php
        			endwhile;
        			else:
        				echo('No posts related');
        			endif;
        			wp_reset_postdata();
			     ?>
            </div>
        </div>

                </div>
            <h4 class="blog-page-title font-alt mb-30">Leave a comment</h4>
           <?php comments_template()?>
        <!-- End Comment Form -->
            </div>

            
                <!-- End Content -->
                 <?php get_sidebar(); ?>
            </div>
        </div>
</section>
<?php  
    get_footer(); 
?>