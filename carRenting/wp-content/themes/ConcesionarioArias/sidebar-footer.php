
                    <!-- Start Sidebar -->
                    <section id="contact" class="page-section">
                        <div class="container relative">
                            <div class="row">
                                <div class="col-md-10 ">
                                    <div class="row">
                                         <div class="col-lg-3 mb-md-30">
                                            <div class="widget">
                                                <h5 class="widget-title font-alt mt-0">Categories</h5>
                                                <div class="widget-body">
                                                    <ul class="clearlist widget-menu">
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
                                                <h5 class="widget-title font-alt mb-10">AUTHORS</h5>
                                                    <div class="widget-body">
                                                        <ul class="clearlist widget-menu">
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
                                            <div class="widget">
                                                <?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('Footer Widgets')) { ?>
                                                <span class="warning"> There is no widgets installed yet... </span>
                                                <?php } ?>
                                            </div>
                                         </div>
                                        <div class="col-lg-3 mb-md-30">
                                            <div class="widget">
                                                <h5 class="widget-title font-alt mb-10">PAGES</h5>
                                                <div class="widget-body">
                                                     <ul class="clearlist widget-comments">
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
                    <!-- End Sidebar -->   