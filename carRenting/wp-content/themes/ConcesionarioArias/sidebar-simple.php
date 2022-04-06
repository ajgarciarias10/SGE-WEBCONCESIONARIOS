
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
                            </div>
           
         </div>

    </section>
                    <!-- En