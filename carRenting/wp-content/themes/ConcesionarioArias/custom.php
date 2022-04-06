<?php 
    get_header();
    
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
<section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/2banner-tucoche70.jpg">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Our Cars</h1>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Custom')->ID)?>">Custom</a>
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

                    <div class="row">
                        <!--https://stackoverflow.com/questions/41738362/how-to-include-pagination-in-a-wordpress-custom-post-type-query!-->
                   <?php 
                    $args = array('posts_per_page' => 5 ,
                    'post_type' => 'ajgarciarias_cr',
                    'paged' => get_query_var('paged')>1 ? get_query_var('paged') : 1) ;
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                    while($custom->have_posts()):
                    $custom->the_post();
                    if( has_post_thumbnail() ){
                    $PostImg = get_the_post_thumbnail_url();
                    }else{
                    $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    }
                    $options = get_option('ajgarciarias_cr_settings');
                    
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pb-30 pb-xs-30">

                    <div class="product-item-opt-1" style ="border-color:<?php echo $options['ajgarciarias_cr_color']?>">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="<?php the_permalink()?>" class="product-item-img">
                                           <img src="<?php echo $PostImg ?>" alt="<?php get_the_title() ?>"/></a>
                                        </a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name shop-cat-name">
                                            <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                        </strong>
                                       <?php do_shortcode('[show_fields id="'.$post->ID.'"]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                  <?php
                    endwhile;
                    else:
                    echo('No posts related');
                    endif;
                  ?>
                    </div>
                                  <ul class="btn btn-mod btn-border btn-round btn-medium">
                     <?php          
                            $p = 9999999;
                                  echo  paginate_links(array(
                                    'prev_text'=>'Back',
                                    'next_level'=>'Next',
                                    'base' => str_replace($p,'%#%',get_pagenum_link($p)),
                                    'format'=>'?paged=%#%',
                                    'current'=> max(1,get_query_var('paged')),
                                    'total'=> $custom->max_num_pages
                                    )
                                    );
                                wp_reset_postdata();
                    ?>
                     
                    </ul>
                </div>
                <!-- End Content -->
                <?php get_sidebar('simple'); ?>
            </div>
        </div>
    </section>
</div>
                

<?php  
    get_footer(); 
?>  