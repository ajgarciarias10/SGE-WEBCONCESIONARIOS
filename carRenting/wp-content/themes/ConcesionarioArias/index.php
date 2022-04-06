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
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Car Renting</h1>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Blog')->ID)?>">Blog</a> / <span>Car Renting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Start Page Content -->
    <section class="page-section">
        <div class="container relative">
            <div class="row">
                <!-- Start Content -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <!-- REALIZAMOS LOOP PARA EL POSTDESTACADO -->
                    <?php
                        $args= array(
                        'posts_per_page'=>1,
                        //'post_type'=>array('ajgarciarias_cr'),
                        //Excluir los post-formats del bucle del post destacado
                        //Tenemos que acceder  a la taxonomia de Wp en la consulta principal de WP
                        'tax_query'=>array(
                            'taxonomy'=>'post_format',
                            //En que campo del post me voy a basar para buscar
                            'field' => 'slug',
                            //Que terminos vamos a manejar -> Los slugs de cada uno de los formatos del post que queramos excluir
                            'terms' => array(
                                'post-format-gallery',
                                'post-format-audio',
                                'post-format-video',
                                'post-format-quote',
                                'post-format-link',
                                'post-format-image'
                                ),
                                //Excluyendolos
                             'operator'=>'NOT IN',
                            )
                        );
                        $destacado = new WP_Query($args);
                        if($destacado->have_posts()):
                        while($destacado->have_posts()):
                        $destacado->the_post();
                        $post_destacado_id = $post->ID;
                        if( has_post_thumbnail() ){
                        $PostImg = get_the_post_thumbnail_url();
                        }else{
                        $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                    }
                    ?>
                    <div class="blog-item">
                        <h2 class="blog-item-title font-alt">
                             <a href="<?php the_permalink()?>"><?php get_the_title() ?></a>
                        </h2>
                        <div class="blog-item-data">
                            <a href="<?php the_permalink()?>"><i class="fa fa-clock-o"></i> <?php the_time('M j, Y') ?></a>
                            <span class="separator">&nbsp;</span>
                            <a href="<?php the_permalink()?>"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></a>
                            <span class="separator">&nbsp;</span>
                            <a href="<?php the_permalink()?>"><i ><?php the_category(', ')?></i></a>
                        </div>
                        <div class="blog-media">
                                <a href="<?php the_permalink()?>">
                                    <img src=" <?php echo $PostImg; ?>" alt="<?php get_the_title() ?>"/>
                                </a>
                        </div>
                        <div class="blog-item-body">
                            <p class="mb-20"><?php echo the_excerpt() ?></p>
                        </div>
                        <div class="blog-item-foot">
                            <a href="<?php the_permalink()?>" class="btn btn-mod btn-border btn-round btn-medium">Read More</a>
                        </div>
                    </div>
                            <?php
                                endwhile;
                                else:
                                echo('No post published');
                                endif;
                                wp_reset_postdata();
                            ?>
                                        <div class="row">
                          <?php
                                $paged =get_query_var('paged') >1 ? get_query_var('paged'):1;
                                $args= array(
                                'paged'=>$paged,
                                'posts_per_parge'=>3,
                                'post_not_in'=>array($post_destacado_id),); //Post_NOT_IN ID EXCLUSIVO DE UNA CONSULTA 
                                
                                $my_query = new WP_Query($args);
                                if($my_query->have_posts()):
                                while($my_query->have_posts()):
                                $my_query->the_post();
                                if( has_post_thumbnail() ){
                                $PostImg = get_the_post_thumbnail_url();
                                }else{
                                $PostImg = get_template_directory_uri()."/images/demo/p10.jpg";
                                }
                            ?>
                                <?php get_template_part( 'templates/content', get_post_format() );  ?>
                         <?php
                                endwhile;
                                else:
                                echo('No post published');
                                endif;
                                
                            ?>
                    </div>   
                    <ul class="btn btn-mod btn-border btn-round btn-medium">
                        <?php 
                            the_posts_pagination(array(
                            'md_size'=>3,
                            'prev_text'=>'Back',
                            'next_level'=>'Next',));
                         ?>
                     </ul>
                </div>
                          
                <!-- Paginacion !-->
                 
                <?php get_sidebar(); ?>
                
                    </div>
                </div>
            </section>
                <!-- End Content -->
<?php  
    get_footer(); 
?>