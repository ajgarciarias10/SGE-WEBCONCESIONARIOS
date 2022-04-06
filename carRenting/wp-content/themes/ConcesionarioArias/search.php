<?php
get_header();

?>
<?php
if (isset($_GET['s']) && empty($_GET['s']))
{
    $label = "All Posts";
}
else
{
    $label = esc_html(get_search_query()); //DEVUELVE LAS PALABRAS DE BÚSQUEDA y utilizando esc_html para evitar caracteres malintencionados
    
}
//HALLAR CUANTAS ENTRADAS HAY
if (have_posts())
{
    $total_results = $wp_the_query->found_posts;
    if ($total_results == 1)
    {
        $results = "1 post found";
    }
    else
    {
        $results = $total_results . " post found";
    }
}
else
{
    $results = "No posts found";
}

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
    <?php get_template_part('nav'); ?>
    <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/full-width-images/2banner-tucoche70.jpg">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">SEARCH FOR:<?PHP echo $label ?></h1>
                    <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                    </div>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
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

  
                     <table class="table table-bordered table-striped mt-10">
                              <tbody>
                                 <tr>
                                    <th>
                                       PUBLISHED:
                                    </th>
                                    <th>
                                     AUTHOR:
                                    </th>
                                       <th>
                                     TITLE:
                                    </th>
                                 </tr>
                                       <?php if (have_posts()):
    while (have_posts()):
        the_post();
        if ($post->post_type == 'ajgarciarias_cr')
        {
            $is_custom = 'Our Cars';
        }
        else
        {
            $is_custom = '';
        }
?>
                                 <tr>
        
                                    <td>
                                       <?php the_time('M j, Y') ?>
                                    </td>
                                    <td>
                                      <?php the_author_posts_link(); ?>
                                    </td>
 
                                     <td>
                                      <?php the_title(); ?>   
                                                                          <?php if ($post->post_type == 'ajgarciarias_cr')
        {
            $is_custom = 'Our Cars';
?>  
                                        <span class="badge badge-secondary"><?php echo $is_custom;
        } ?></span>
                                    </td>
                                 </tr>
                            <?php
    endwhile;
endif;
?>
                                </tr>
                              </tbody>
                           </table>
             
              <?php
the_posts_pagination(array(
    'md_size' => 3,
    'prev_text' => 'Back',
    'next_level' => 'Next',
));
?>
                </div>
                <?php get_sidebar('simple'); ?>

            </div>
           
         </div>

    </section>            <!--Fi
<?php
get_footer();
?>
