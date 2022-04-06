
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
<div class="page" id="top">
    <?php	get_template_part('nav');?>
        <!-- Start Head Section -->
    <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/2banner-tucoche70.jpg">
        <div class="relative container align-left">
            <div class="row">
                
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Archives:</h1>
                    <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                    </div>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a><span>/Archives</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Start Portfolio Section -->
    <section class="page-section">
        <div class="container relative">

            <ul class="works-grid work-grid-3 clearfix font-alt hover-white hide-titles" id="work-grid">
                <li class="work-item mix development">
                      
                        <h5 class="work-title">Latest Entries 01.</h5>
                        
                            <?php
                            $args = array(
                            'type' => 'postbypost', //Devuelve el titulo de los post
                            'limit' => 5,           //Limita los resultados a 5
                            );
                            echo('<ul class="clearlist widget-menu">');
                            wp_get_archives($args);
                            echo("</ul>");
                            ?>   
                   
                        
                   
                </li>
                <li class="work-item mix branding design">
                   
                        <h5 class="work-title">Our Cars 02.</h5>
                         <?php
                            $args = array(
                            'type' => 'postbypost', //Devuelve el titulo de los post
                            'limit' => 10,
                            'post_type'=>'ajgarciarias_cr'
                            );
                           echo('<ul class="clearlist widget-menu">');
                            wp_get_archives($args);
                            echo("</ul>");
                            ?>   
                       
                
                </li>
                <li class="work-item mix branding">
                     
                        <h5 class="work-title">Categories 03.</h5>
                       
                            <ul class="clearlist widget-menu">
                            <?php
                                  $lista = wp_list_categories("title_li=&show_count=true&echo=0");
                                  echo($lista);
                              ?>
                            </ul>
                      
                   
                </li>
                <li class="work-item mix design development">
                   
                        <h5 class="work-title">Tag List 04.</h5>
                        
                            <ul class="clearlist widget-menu">
                                <?php list_tags_archives();?>
                            </ul>
                       
                    
                </li>
                <li class="work-item mix design">
                 
                        <h5 class="work-title">Author By 05.</h5>

                                <ul class="clearlist widget-menu">
                                 <?php wp_list_authors('hide_empty=0&optioncount=1');?>
                            </ul>
                       
                   
                    </li>
            <!-- AllAuthor -->
                            <?php
                                //Recorrer todos los autores
                                
                                //Conseguir todos los autores
                                
                                //Ponemos en argumentos los campos que queremos obtener
                                $args=array(
                                    'display_name',
                                    'ID',
                                );
                                $authors = get_users( $args ); //Devuelve una coleccion de objetos de tipo usuario de lo pasado
                                
                                //Por cada autor creo una ficha
                                
                                foreach($authors as $author){
                            ?>
     
                <li class="work-item mix design branding">
                     <div class="widget">
                        <h5 class="work-title"><?php echo 'Posts by '.$author->display_name; ?></h5>
                          <div class="widget-body">
                                <ul class="clearlist widget-menu">
                                <?php
                                    $args = array(
                                        'numberposts' => 10, //Mostramos 5 posts
                                        'orderby' => 'date', //Por fecha de publicacion
                                        'order' => 'DESC', //De los mas antiguos
                                        'author' => $author->ID, //Solo los de ese Autor
                                    );
                                    $posts = get_posts( $args ); //Devuelve una coleccion de objetos de tipo post del autor
                                    
                                    foreach($posts as $post){
                                        echo '<li><a href="'.get_permalink().'"> '.$post->post_title.' </a></li>';
                                    }
                                                ?>
                            </ul>
                        
                    </div>
                </li>

      
                <?php 
                //Cerrar el bucle
                }
                ?>
    <li class="work-item mix design branding">

    <h5 class="work-title">Daily Posts 09.</h5>
   
    <ul class="clearlist widget-menu">
    <?php
    $args = array(
    'type'=> 'daily',
    );
    wp_get_archives($args)
    ?>
    </ul>

  
    </li>
    <li class="work-item mix design branding">

    <h5 class="work-title">Monthly Posts 10.</h5>
    <ul class="clearlist widget-menu">
    <?php
    $args = array(
    'type'=> 'monthly',
    );
    wp_get_archives($args)
    ?>
    </ul>

    </li>
    <li class="work-item mix design branding">

    <h5 class="work-title">Yearly Posts 11.</h5>

    <ul class="clearlist widget-menu">
    <?php
    $args = array(
    'type'=> 'yearly',
    );
    wp_get_archives($args)
    ?>
    </ul>

    </li>
    <li class="work-item mix design branding">

    <h5 class="work-title">Most Popular Posts.</h5>

    <ul class="clearlist widget-menu">
    <?php
    $args = array(
    'posts_per_page' => 10,  // limitamos a 10 posts maximo
    'meta_key' => 'numvisits', //El campo para filtrar es numvisits
    'orderby'=> 'meta_value_num', //orenamos de mayor a menor numero de visitas 
    'order' => 'DESC',
    
    
    );
    $popular = new WP_Query( $args);
    if($popular -> have_posts()):
    while($popular -> have_posts()):
    $popular -> the_post();
    echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
    
    ?>
    
    <?php
    endwhile;
    endif;
    
    wp_reset_query();
    ?>
    </ul>

    </li>
    <li class="work-item mix design branding">
    <h5 class="work-title">Most Popular Comments</h5>

    <ul class="clearlist widget-menu">
    <?php
    $args = array(
    'orderby' => 'comment_count',
    );
    
    $commented = new WP_Query($args);
    
    if ($commented->have_posts()):
    while($commented->have_posts()):
    $commented->the_post();
    $num_comments = get_comments_number($post->ID);
    if($num_comments > 0) {
    echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a><span class="badge pull-right">'.$num_comments.'</span></li>';
    }
    endwhile;
    endif;
    ?>
    </ul>

    </li>
            </ul>
        </div>
    </section>
    <!-- End Portfolio Section -->
<?php  
    get_footer(); 
?>    
    