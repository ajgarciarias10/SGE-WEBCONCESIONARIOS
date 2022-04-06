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
    <!-- Start Hero Section -->
    <section id="home" class="home-section bg-dark-alfa-50 parallax-2" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/2banner-tucoche70.jpg">
        <div class="js-height-full container">
            <!-- Start Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <h1 class="hs-line-1 font-alt mb-50 mb-xs-30 mt-50 mt-sm-0">Concessionaire Arias</h1>
                    <div class="hs-line-6">
                        Our new special concessionaire, our best wishes is having the best Car.
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
            <!-- Start Scroll Down -->
            <div class="local-scroll">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
        </div>
    </section>
    <?php	get_template_part('nav');?>
    <section id="about" class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt align-left mt-0 mb-20 mb-sm-20">
                About Company
                <a href="<?php  echo get_page_link(get_page_by_title('Contact')->ID)?>" class="section-more right">Read more <i class="fa fa-angle-right"></i></a>
            </h2>
            <div class="section-text">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-md-50 mb-sm-30 mb-xs-30">
                     
                        <div class="progress tpl-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-skill">Our Sales</span> <span>90%</span>
                            </div>
                        </div>
                    
                        <div class="progress tpl-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-skill">Development,%</span> <span>80%</span>
                            </div>
                        </div>
                      
                        <div class="progress tpl-progress mb-0 mb-sm-30 mb-xs-30">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-skill">Engineering, %</span> <span>85%</span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-0 mb-xs-30 about-desc">
                        <h2 class="section-title font-alt align-left mt-0 mb-0 mb-sm-40">Our Story</h2>
                       Our dealership was created in 2021, by an innovator named Toni, who decided to create a website to expose cars that were not sold on applications such as Wallapop, Mil Anuncios etc.
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-sm-0 mb-xs-0 about-desc">
                        <h2 class="section-title font-alt align-left mt-0 mb-0 mb-sm-40">Our Mission</h2>
                      Getting  our services  as better as we can making that  all of you are  comfortable in the matter of  prices and assistance.
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <hr class="mt-0 mb-0">
     
    <section id="why" class="page-section bg-gray pb-40 pb-md-70">
        <div class="container relative">
            <h2 class="section-title font-alt mt-0 mb-10 mb-sm-40">Why Choose Us</h2>
            <div class="row display-none-xs display-none-sm mb-15">
                <div class="col-md-8 offset-md-2">
                    <div class="section-text align-center mb-10 mb-xs-10">
                        Nowadays, selling second-hand cars in Granada is very popular: many users prefer this type of purchase, which is much cheaper than buying a new car. In Granada, there are several ways to buy a used car: from a dealer, from a private individual, at an auction or by searching Google for "coches Milanuncios Granada" or "coches Wallapop Granada".

                    </div>
                </div>
            </div>
            <div class="row feature-boxes-container">
                <div class="col-lg-4 col-md-12 mb-30 mb-md-30 mb-sm-30 feature-box-04">
                    <div class="feature-box-inner">
                        <i class="icon-layers"></i>
                        <h4 class="section-title font-alt align-left mt-20">Flexible rentals</h4>
                        <div class="sepratar"></div>
                        <div class="section-text align-left mb-0">
                            Cancel or change most bookings for free up to 48 hours before pick-up
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-30 mb-md-30 mb-sm-30 feature-box-04">
                    <div class="feature-box-inner">
                        <i class="icon-genius"></i>
                        <h4 class="section-title font-alt align-left mt-20">No hidden fees</h4>
                        <div class="sepratar"></div>
                        <div class="section-text align-left mb-0">
                            Know exactly what you’re paying
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 feature-box-04">
                    <div class="feature-box-inner">
                        <i class="icon-hotairballoon"></i>
                        <h4 class="section-title font-alt align-left mt-20">Price Match Guarantee</h4>
                        <div class="sepratar"></div>
                        <div class="section-text align-left mb-0">
                            Found the same deal for less? We’ll match the price.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mt-0 mb-0">
            
    <section id="projects" class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt mt-0 mb-10 mb-sm-10">Our Cars</h2>
            <div class="row display-none-xs display-none-sm mb-15">
                <div class="col-md-8 offset-md-2">
                    <div class="section-text align-center mb-0 mb-xs-10">
                        Our wide Selection of the best worlds cars
                    </div>
                </div>
            </div>
            <div class="works-filter font-alt align-center mb-20">
                <a href="#" class="filter active" data-filter="*">All cars</a>
                <a href="#" class="filter" data-filter=".branding">Cheapest Cars</a>
                <a href="#" class="filter" data-filter=".design">Cool Cars</a>
                <a href="#" class="filter" data-filter=".development">Sportive</a>
            </div>
              
            <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                     <?php 
                    $args = array('posts_per_page' => 4 ,
                    'post_type' => 'ajgarciarias_cr',
                   // 'paged' => get_query_var('paged')>1 ? get_query_var('paged') : 1,
                   'tag' => 'Sportive',
                     
                     ) ;
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                    while($custom->have_posts()):
                    $custom->the_post();
                    if( has_post_thumbnail() ){
                    $PostImg = get_the_post_thumbnail_url();
                    }else{
                    $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    
                    }
                    
                    ?>
                <li class="work-item mix development">
                    
                    <a href="<?php echo  $PostImg?>" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <img src="<?php echo  $PostImg?>" alt="Alvira" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title"><?php the_title()?></h3>
                            <div class="work-descr">
                                <a href="<?php the_permalink()?>"> If you want to see more about them click and view</a>
                               
                            </div>
                        </div>
                    </a>
                </li>
                  <?php
                    endwhile;
                    else:
                    echo('No posts related');
                    endif;
                    wp_reset_postdata();
               
                  ?>
                  
                 <?php 
                    $args = array('posts_per_page' => 5 ,
                    'post_type' => 'ajgarciarias_cr',
                    //'paged' => get_query_var('paged')>1 ? get_query_var('paged') : 1,
                   'tag' => 'Cheap',
                     
                     ) ;
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                    while($custom->have_posts()):
                    $custom->the_post();
                    if( has_post_thumbnail() ){
                    $PostImg = get_the_post_thumbnail_url();
                    }else{
                    $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    
                    }
                    
                    ?>
                <li class="work-item mix branding">
                         <a href="<?php echo  $PostImg?>" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <img src="<?php echo  $PostImg?>" alt="Alvira" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title"><?php the_title()?></h3>
                            <div class="work-descr">
                                <a href="<?php the_permalink()?>"> If you want to see more about them click and view</a>
                               
                            </div>
                        </div>
                    </a>
                </li>
                 <?php
                    endwhile;
                    else:
                    echo('No posts related');
                    endif;
                    wp_reset_postdata();
                  ?>
                 <?php 
                    $args = array('posts_per_page' => 5 ,
                    'post_type' => 'ajgarciarias_cr',
                    //'paged' => get_query_var('paged')>1 ? get_query_var('paged') : 1,
                   'tag' => 'Cool',
                     
                     ) ;
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                    while($custom->have_posts()):
                    $custom->the_post();
                    if( has_post_thumbnail() ){
                    $PostImg = get_the_post_thumbnail_url();
                    }else{
                    $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    
                    }
                    
                    ?>
                <li class="work-item mix design">
                                             <a href="<?php echo  $PostImg?>" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <img src="<?php echo  $PostImg?>" alt="Alvira" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title"><?php the_title()?></h3>
                            <div class="work-descr">
                                <a href="<?php the_permalink()?>"> If you want to see more about them click and view</a>
                               
                            </div>
                        </div>
                    </a>
                </li>
                       <?php
                    endwhile;
                    else:
                    echo('No posts related');
                    endif;
                    wp_reset_postdata();
                  ?>

            </ul>
                
        </div>
    </section>
                

    <section id="testimonials" class="page-section pt-30 pt-sm-20 pt-xs-20 bg-dark bg-dark-alfa-60 fullwidth-slider" data-background="<?php echo  get_template_directory_uri();?>/assets/images/descarga.jpg">
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 offset-md-2 align-center">
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <h3 class="small-title font-alt mb-10">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable ...</p>
                        <footer class="testimonial-author">
                            Steve Jobs, Apple
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 offset-md-2 align-center">
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <h3 class="small-title font-alt mb-10">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>I had a few things I needed help with on this template... Their customer service was amazing and helped me out many times. All fits and works well and good!! Top marks. One of the complete template with different requirements ...</p>
                        <footer class="testimonial-author">
                            Larry Page, Google.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 offset-md-2 align-center">
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <h3 class="small-title font-alt mb-10">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>Really like the cleanliness of the design, the documentation and the content-blocks. Obviously it is still a relatively new template (version 1.0.3), so it lacks some features that you'll find in more mature templates ...</p>
                        <footer class="testimonial-author">
                            Mark Zuckerberg, Facebook
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>


    <div id="blog" class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt mt-0 mb-10 mb-sm-10">OUR LATEST POSTS</h2>
            <div class="row display-none-xs display-none-sm mb-10">
                <div class="col-md-8 offset-md-2">
                    <div class="section-text align-center mb-10 mb-xs-10">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less ...
                    </div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <?php
                                $args= array(
                                'post_per_parge'=>3,);
                                $custom_query = new WP_Query($args);
                                if($custom_query->have_posts()):
                                while($custom_query->have_posts()):
                                $custom_query->the_post();
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
                        <a href="<?php the_permalink()?>"><?php the_author_posts_link(); ?></a> | <?php the_time('M j, Y') ?> | <?php comments_number('0 comments', '1 comment', '% comments'); ?>
                    </div>
                    <div class="post-prev-text">
                        <?php echo the_excerpt() ?>
                    </div>
                    <a href="<?php the_permalink()?>" class="btn btn-mod btn-border btn-round btn-medium">Read More</a>
                </div>
             	<?php
        			endwhile; 
        			else:
        				echo('No post published');
        			endif;
			     ?>
            </div>
        </div>
    </div>
   
    <!-- End Blog Section -->
    <hr class="mt-0 mb-0">

</div>
<?php  
    get_footer(); 
?>