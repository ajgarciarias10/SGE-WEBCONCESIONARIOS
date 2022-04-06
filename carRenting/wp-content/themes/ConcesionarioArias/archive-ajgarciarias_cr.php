
<?php 
    get_header();
?>
<?php      
    if(isset($_GET['s']) && empty($_GET['s'])){
            $label = "All Posts";
    }
    else{
        $label = esc_html(get_search_query());//DEVUELVE LAS PALABRAS DE BÚSQUEDA y utilizando esc_html para evitar caracteres malintencionados
    }
    //HALLAR CUANTAS ENTRADAS HAY
    if(have_posts()){
        $total_results = $wp_the_query -> found_posts;
        if($total_results == 1 ){
            $results = "1 post found";
        }
        else{
            $results = $total_results." post found";
        }
    }
    else{
         $results = "No posts found";
    }
    
        //HALLAR EL CRITERIO DE BUSQUEDA 
        if(is_category()){
            $criterio = '<span class ="key">'.single_cat_title('',false).'</span> category';
            
        }
        elseif(is_tag()){
            $criterio = '<span class ="key">'.single_tag_title('',false).'</span> tag';
        }
        elseif(is_author()){
            the_post();///ACEDEMOS A TODAS LAS PROPIEDADES DEL POST, PERO HACEMOS QHE AVANCE EL CURSOS DEL RESULTSET
            $criterio = "Author:".'<span class ="key">'. get_the_author().'</span> ';
            ///PASAMOS EL CURSO DEL RESULSET A LA PRIMERA POSICION
            rewind_posts();
        }
        elseif(is_day()){
            $criterio = '<span class ="key">'.get_the_date().'</span> ';
        }
        elseif(is_month()){
            $criterio = '<span class ="key">'.get_the_date('F Y').'</span> ';
        }
        elseif(is_year()){
            $criterio = '<span class ="key">'.get_the_date('Y').'</span> ';
        }

?>

<?php 
    get_header();
    
?>
<?php      
    if(isset($_GET['s']) && empty($_GET['s'])){
            $label = "All Posts";
    }
    else{
        $label = esc_html(get_search_query());//DEVUELVE LAS PALABRAS DE BÚSQUEDA y utilizando esc_html para evitar caracteres malintencionados
    }
    //HALLAR CUANTAS ENTRADAS HAY
    if(have_posts()){
        $total_results = $wp_the_query -> found_posts;
        if($total_results == 1 ){
            $results = "1 post found";
        }
        else{
            $results = $total_results." post found";
        }
    }
    else{
         $results = "No posts found";
    }
    
        //HALLAR EL CRITERIO DE BUSQUEDA 
        if(is_category()){
            $criterio = '<span class ="key">'.single_cat_title('',false).'</span> category';
            
        }
        elseif(is_tag()){
            $criterio = '<span class ="key">'.single_tag_title('',false).'</span> tag';
        }
        elseif(is_author()){
            the_post();///ACEDEMOS A TODAS LAS PROPIEDADES DEL POST, PERO HACEMOS QHE AVANCE EL CURSOS DEL RESULTSET
            $criterio = "Author:".'<span class ="key">'. get_the_author().'</span> ';
            ///PASAMOS EL CURSO DEL RESULSET A LA PRIMERA POSICION
            rewind_posts();
        }
        elseif(is_day()){
            $criterio = '<span class ="key">'.get_the_date().'</span> ';
        }
        elseif(is_month()){
            $criterio = '<span class ="key">'.get_the_date('F Y').'</span> ';
        }
        elseif(is_year()){
            $criterio = '<span class ="key">'.get_the_date('Y').'</span> ';
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
    <?php	get_template_part('nav');?>
    <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/section-bg-3.jpg">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Archive :<?PHP echo $criterio?></h1>
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"><?php echo $results?></h1>
                    <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                    </div>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                    </div>
                </div>
            </div>
        </div>
</section>                   

        <!-- Start Page Content -->
    <section class="page-section">
        <div class="container relative">
           <div class="row">
                <!-- Start Content -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row elements-dark">
                    <div class="col-lg-4 mb-md-30"><span>PUBLISHED:</span></div>
                    <div class="col-lg-4 mb-md-30"><span>AUTHOR:</span></div>
                    <div class="col-lg-4"><span>TITLE:</span></div>
                    </div>
                    <?php   if ( have_posts() ) :
                    while ( have_posts() ) : 
                    the_post();
                    if($post -> post_type == 'ajgarciarias_cr'){
                        $is_custom = 'Project';
                    }else{
                        $is_custom='';
                    }
                    //contenido del loop (template tags, html, etc)
                    ?>
                    <div class="blog-item">
                        <div class="row elements-light">
                        <div class="col-lg-4 mb-md-30"><span><?php the_time('M j, Y') ?></span></div>
                        <div class="col-lg-4 mb-md-30"><span><?php the_author_posts_link(); ?></span></div>
                        <div class="col-lg-4"><span><?php the_title();?>.<?php echo $is_custom?></span></div>
                        </div>
                    </div>
                 <?php
                  endwhile;
                  endif;
                 ?>
                </div>
                <?php get_sidebar('simple'); ?>

            </div>
           
         </div>

    </section>            <!--Fin 1er Loop -->
<?php  
    get_footer(); 
?>    
    