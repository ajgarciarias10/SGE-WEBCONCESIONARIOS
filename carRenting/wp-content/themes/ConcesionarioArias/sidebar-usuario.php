
                                <!-- Start Sidebar -->
                <div class="col-lg-3 col-md-3 col-sm-12 sidebar mt-0">
                    <?php
                        get_search_form();
                    ?>
                    <?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('Sidebar Widgets')) { ?>
                        <span class="warning"> There is no widgets installed yet... </span>
                        <?php } ?>
                    <!-- Start Categories Widget -->
                                        <div class="widget">
                        <h5 class="widget-title font-alt mt-0">Latest Entries</h5>
                        <div class="widget-body">
                                                        <?php
                            $args = array(
                            'type' => 'postbypost', //Devuelve el titulo de los post
                            'limit' => 5,           //Limita los resultados a 5
                            );
                            echo("<ul class='clearlist widget-posts'>");
                            wp_get_archives($args);
                            echo("</ul>");
                            ?>   
                        </div>
                    </div>
                    <!-- End Categories Widget -->
                    <!-- Start Tags Widget -->
                    <div class="widget">
                        <h5 class="widget-title font-alt mt-0">Categories</h5>
                        <div class="widget-body">
                                <ul class="clearlist widget-posts">
                                
                                 <?php
                                  $lista = wp_list_categories("title_li=&show_count=true&echo=0");
                                  echo($lista);
                              ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Tags Widget -->
                    
                    <!-- Start Latest Entries Widget -->
                    <div class="widget">
                        <h5 class="widget-title font-alt mt-0">Posts Tags</h5>
                        <div class="widget-body">
                             <div class="tags mt-30">
                                 
                            <?php 
                            $before = '';
                            $seperator = ''; // blank instead of comma
                            $after = '';
                            the_tags( $before, $seperator, $after );
                            ?>
                        </div>
                        </div>
                    </div>
                    <!-- End Latest Posts Widget -->
                    <!-- Start Latest Comments Widget -->
                    <div class="widget">
                        <h5 class="widget-title font-alt mb-10">AUTHORS</h5>
                        <div class="widget-body">
                             <ul class="clearlist widget-menu">
                                <?php
                                    $args = array(
                                        'hide_empty' => false,      //Enseña los autores sin entradas
                                        'orderby'=> 'post_count',  //Ordena por numero de Posts
                                        'order' => 'DESC',          //Orden descendente
                                        'optioncount'  => true,     //Muestra el num de POSTS
                                        );
                                    wp_list_authors( $args );
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Latest Comments Widget -->
                    <!-- Start Archive Widget -->
                    <div class="widget">
                        <h5 class="widget-title font-alt mb-10">PAGES</h5>
                        <div class="widget-body">
                           
                            <ul class="clearlist widget-menu">
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

                    <!-- End Archive Widget -->
                </div>
                 <!-- End Sidebar -->   