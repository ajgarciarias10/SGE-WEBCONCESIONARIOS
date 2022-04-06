 <!-- Start Footer -->
    <footer class="page-section bg-dark footer pb-50" >
        <div class="container" >

            <!-- Start Footer Bottom -->
            <div class="footer-text">
                <!-- Start Copyright -->
                <div class="footer-copy copy-dark font-alt">
                    <a href="<?php echo get_option("Home")?>" >&copy; 2022 Concessionaire</a>
                </div>
                <!-- End Copyright -->
            </div>
            <!-- End Footer Bottom -->
        </div>
        <!-- Start Top Link -->
        <div id="back-to-top" class="back-to-top">
            <i class="fa fa-angle-up fa-2x"></i>
        </div>
        <section id="contact" class="page-section">
        <div class="container relative">
            <div class="row">
                <div class="col-md-10 lg-10 " >
                    <div class="row">
                         <div class="col-lg-3 mb-md-30">
                            <div class="widget">
                                <h5 class="widget-title font-alt mt-0" style="color:white">Categories</h5>
                                <div class="widget-body">
                                    <ul class="clearlist widget-menu2" style="color:white">
                                        <?php
                                        $lista = wp_list_categories("title_li=&show_count=true&echo=0");
                                        echo($lista);
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-3 mb-md-30">
                            <div class="widget">
                                <h5 class="widget-title font-alt mb-10"style="color:white;">AUTHORS</h5>
                                    <div class="widget-body">
                                        <ul class="clearlist widget-menu2"style="color:white" >
                                                <?php
                                                    $args = array(
                                                    'echo'=>false,
                                                    'hide_empty' => false,      //Enseña los autores sin entradas
                                                    'orderby'=> 'post_count',  //Ordena por numero de Posts
                                                    'order' => 'DESC',          //Orden descendente
                                                    'optioncount'  => true, 
                                                    'exclude'  => $curauth->ID,// excluye el author que estoy viendo en la pantalla
                                                    
                                                    );
                                                    $authors= wp_list_authors( $args );
                                                    
                                                    echo $authors;
                                                ?>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                         <div class="col-lg-3 mb-md-30">
                            <div class="widget-calendar">
                                <?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('Footer Widgets')) { ?>
                                <span class="warning"> There is no widgets installed yet... </span>
                                <?php } ?>
                            </div>
                         </div>
                        <div class="col-lg-3 mb-md-30">
                            <div class="widget">
                                <h5 class="widget-title font-alt mb-10"style="color:white">PAGES</h5>
                                <div class="widget-body">
                                     <ul class="clearlist widget-menu2"style="color:white">
                                        <?php              
                                        $pages = get_pages();   //Devuelve coleccion de objetos tipo página
                                        $exclude = array();
                                        foreach($pages as $page){
                                        if ( !in_array( $page->post_title, array('Home', 'Reviews', 'Blog', 'Contact', 'Archives', 'Private Zone') ) ) {
                                        $exclude[] = $page->ID;
                                        }
                                        }
                                        $args = array(
                                        'title_li' => "",
                                        'exclude' => implode(", ", $exclude),
                                        );
                                        
                                        wp_list_pages($args);
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- End Top Link -->
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->
</div>
<!-- End Page Wrapper -->


	<?php
			wp_footer();
	
    	?>
</body>

<!-- Mirrored from templates.g-inter.net/alvira/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 17:13:03 GMT -->
</html>