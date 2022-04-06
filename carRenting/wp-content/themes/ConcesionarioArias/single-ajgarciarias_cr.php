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
   <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/2banner-tucoche70.jpg">
      <div class="relative container align-left">
         <div class="row">
            <div class="col-md-12 general-breadcrumbs">
               <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"><?php the_title();?></h1>
               <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"></h1>
               <div class="hs-line-3 font-alt mod-breadcrumbs">
                  <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Custom')->ID)?>">Custom</a> / <span>Our Cars</span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="page-section">
      <div class="container relative">
         <div class="row">
            <div class="col-lg-9 col-md-7">

               <div class="row mb-30 mb-sm-20 mb-xs-20">
                  <!-- Start Product Image -->
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-20 mb-xs-20">
                     <div class="xzoom-container">
                        <img class="xzoom5 margin-10px-bottom" id="xzoom-magnific" src="<?php echo $PostImg?>" alt="<?php echo $PostImg?>">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 product-single">
                     <div class="blog-item-data">
                        <a href="<?php the_permalink()?>"><i class="fa fa-clock-o"></i><?php echo get_num_visits($post_id)?></a>
                        <span class="separator">&nbsp;</span>
                        <a href="<?php the_permalink()?>"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></a>
                        <span class="separator">&nbsp;</span>
                        <span class="separator">&nbsp;</span>
                        <a href="<?php the_permalink()?>"><i class="fa fa-comments"></i>  <?php comments_number('0 comments', '1 comment', '% comments'); ?></a>
                     </div>
                     <div class="product-detail item-inner">
                        <h3 class="single-product mt-10 mb-10"><?php the_title()?></h3>
                        <hr class="mt-20 mb-10">
                        <div class="mb-10">
                           <span class="new-price"><?php  echo get_post_meta($post->ID,'price',true)?></span>
                        </div>
                        <hr class="mt-10 mb-15">
                        <div class="caption">
                           <p class="manufacture-product">
                              <span>Description: </span> <p class="mb-20"><?php the_excerpt()?></p>
                           </p>
                        </div>
                        <hr class="mt-10 mb-20">
                     </div>
                  </div>
                  <!-- End Product Info -->
               </div>
               <div class="row mb-20">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <ul class="nav nav-tabs tpl-tabs animate">
                        <li class="mr-3 active">
                           <a href="#one" data-toggle="tab" aria-expanded="true">Information</a>
                        </li>
                        <li class="mr-3">
                           <a href="#two" data-toggle="tab" aria-expanded="false">Reviews</a>
                        </li>
                        <li class="mr-3">
                           <a href="#three" data-toggle="tab" aria-expanded="false">Related Products</a>
                        </li>
                     </ul>
                     <div class="tab-content tpl-tabs-cont">
                      <div class="tab-pane fade active in show" id="one">
                         
                         <?php  do_shortcode('[show_fields_single id="'.$post->ID.'"]')?>
                         </div>
                        <div class="tab-pane fade" id="two">
                          <?php comments_template()?>
                        </div>
                        <div class="tab-pane fade" id="three">
                                                  <?php
                              $args= array(
                              'post_per_parge'=>5,
                              'post__not_in' => array($post_id),
                              'post_type' => array('ajgarciarias_cr'),
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
                           <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 pb-0 pb-md-4 pb-sm-0 pb-xs-30">
                              <div class="product-item-opt-1">
                                 <div class="product-item-info">
                                    <div class="product-item-photo">
                                       <a href="<?php the_permalink()?>" class="product-item-img">
                                       <img src="<?php echo $PostImg ?>" alt="<?php get_the_title() ?>">
                                       </a>
                                       <div class="product-item-actions">
                                          <a href="#" class="btn btn-wishlist"><span>Wish List</span></a>
                                          <a href="#" class="btn btn-compare"><span>Compare</span></a>
                                          <a href="#" class="btn btn-quickview"><span>Quick View</span></a>
                                       </div>
                                       <button class="btn btn-cart" type="button"><span>Add To Cart</span></button>
                                       <div class="label-offer">Sale</div>
                                    </div>
                                    <div class="product-item-detail">
                                       <strong class="product-item-name">
                                       <a href="#"><?php the_title() ?></a>
                                       </strong>
                                       <div class="clearfix">
                                          <div class="product-item-price">
                                             <span class="price"><?php  echo get_post_meta($post->ID,'price',true)?></span>
                                          </div>
                                          <div class="product-reviews-summary">
                                             <div class="rating-summary">
                                                <div class="rating-result" title="<?php  echo get_post_meta($post->ID,'rating',true)?>">
                                                   <span class="width-<?php  echo get_post_meta($post->ID,'rating',true)?>">
                                                   <span><span><?php  echo get_post_meta($post->ID,'rating',true)?></span>% of <span>100</span></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
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
                  
               </div>
            </div>
            <?php get_sidebar('custom'); ?>
         </div>
         <!-- End Related Products -->
      </div>
   </section>
   <?php  
      get_footer(); 
      ?>