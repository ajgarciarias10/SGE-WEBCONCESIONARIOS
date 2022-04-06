<?php 
    get_header();
    //OBTENER EL AUTOR ACTUAL
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

                 $user= wp_get_current_user();//Devuelve objeto de tipo user con el user que esta logueado
                $user_name = $user->display_name;
                 $rol = get_author_role($user->ID);
    
    
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
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"><?php echo  get_the_author_meta('first_name')?></h1>
                    <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                        Template for: <?php echo get_author_role($curauth->ID);?>
                    </div>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php the_permalink()?>">Home</a>/ <span>Our Team</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Start Team Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-8 col-lg-6 mb-sm-30 mb-xs-30 offset-md-1">
                    <div class="team-item">
                        <div class="team-item-image">
                            <?php
                                $URL = get_template_directory_uri()."/assets/images/".$curauth->nickname.".jpg";
                                
                                $URL2 =  get_template_directory_uri()."/assets/images/".$curauth->nickname.".png";
                                if(my_file_exists($URL)){
                                     $miURL = $URL;
                                     
                                }elseif(my_file_exists($URL2)){
                                     $miURL = $URL2;
                                }
                                else{
                                    $miURL =  get_template_directory_uri()."/assets/images/team/team-1.jpg";
                                }
                                  echo "<img src=".$miURL.">";
                                
                            ?>
                       
                            
                            <div class="team-item-detail">
                                <h4 class="font-alt normal"><?php echo get_the_author_meta('grade')?></h4>

                                <div class="team-social-links">
                                    <a href="<?php echo get_the_author_meta('facebook');?>" ><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo get_the_author_meta('twitter');?>" ><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo get_the_author_meta('instagram');?>" ><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-descr font-alt">
                            <div class="team-item-name">
                               <!--</* ?php the_author_meta('display_name')?>*/-->
                                <?php the_author_meta('nicename')?>
                            </div>
                            <div class="team-item-role">
                            <?php echo get_author_role($curauth->ID);?>
                            <h3><?php echo get_the_author_meta('first_name')."".get_the_author_meta('last_name');?></h3>
                            <p><?php echo get_the_author_meta('description')?></p>
                            
                            </div>
                            
                        </div>
                        <hr class="mt-0 mb-0 col-lg-12">
                    <h2 class="section-title font-alt mt-0 mb-20 mb-sm-40">SKILLS</h2>
                     <div class="progress tpl-progress mt-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_the_author_meta('skill1V')?>" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-skill"><?php echo get_the_author_meta('skill1')?>, %</span> <span><?php echo get_the_author_meta('skill1V')?></span>
                        </div>
                    </div>
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_the_author_meta('skill2V')?>" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-skill"><?php echo get_the_author_meta('skill2')?>, %</span> <span><?php echo get_the_author_meta('skill2V')?></span>
                        </div>
                    </div>
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_the_author_meta('skill3V')?>" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-skill"><?php echo get_the_author_meta('skill3')?>, %</span> <span><?php echo get_the_author_meta('skill3V')?></span>
                        </div>
                    </div>
                    <div class="progress tpl-progress mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_the_author_meta('skill4V')?>" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-skill"><?php echo get_the_author_meta('skill4')?>, %</span> <span><?php echo get_the_author_meta('skill4V')?></span>
                        </div>
                    </div>
                    </div>
                </div>
                <?php
                    if(is_user_logged_in()){
                            switch($rol){
                                case 'administrator':
                                    break;
                                case 'editor':
                         
                                    break;
                                case 'author':
                                    break;
                                case 'contributor':
                                  
                                    break;
                                case 'subscriber':
                                    get_sidebar('usuario'); 
                                    break;
                            }
                        }
                        else{
                               get_sidebar('usuario'); 
                        }
                 
                ?>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <div class="row elements-dark">
    <div class="col-lg-12"><span><h2 class="section-title font-alt mt-0 mb-20 mb-sm-40"> Related Posts</h2></span></div>
</div>
    <section class="page-section">
        <div class="container relative">
            <div class="row">
    <div class="row multi-columns-row">
    <?php 
      $args = array(
          'post_per_page'=> 3,
          'author'=> $curauth->ID,);
          $related = new WP_Query($args);
          $number = 0;
          while($related -> have_posts()):
              $related -> the_post() ;
              $number++;
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
   	wp_reset_postdata();
   
   ?>
     </div>
     </div>
     </div>
     </section>

<?php  
    get_footer(); 
?>