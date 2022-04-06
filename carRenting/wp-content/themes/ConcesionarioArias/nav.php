    <!-- Start Navigation -->
    <nav class="main-nav dark transparent stick-fixed">
        
        <div class="full-wrapper relative clearfix">
            <!-- Start Top Search Section -->
            <div class="top-search">
                <form class="search-form" action="#" method="get" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fa fa-search" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Enter keywords here ...">
                        <span class="input-group-addon close-search">
                        <i class="fa fa-times font-size18 line-height-28 margin-5px-top"></i>
                    </span>
                    </div>
                </form>
            </div>
            <!-- End Top Search Section -->
            <!-- Start Logo -->
            <div class="nav-logo-wrap local-scroll">
                <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>" class="logo">
                    <img src="<?php echo  get_template_directory_uri();?>/assets/images/concesionario.png" alt="Concessionaire"/>
                </a>
            </div>
            <!-- End Logo -->
            <div class="mobile-nav">
                <i class="fa fa-bars">
                    
                </i>
            </div>
            <!-- Start Main Menu -->
            <div class="inner-nav desktop-nav">
                <ul class="clearlist">
                    <!--<li><a href="<//?php echo get_page_link(get_option('Home')->ID)?>#home" class="mn-has-sub">Home</a></li>-->
                    <li><a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>" class="mn-has-sub">Home</a></li>
                    <li><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID)?>" class="mn-has-sub">Blog</a></li>
					<li><a href="<?php echo get_page_link(get_page_by_title('Custom')->ID)?>" class="mn-has-sub">Our Cars</a></li>
					<li><a href="<?php echo get_page_link(get_page_by_title('Contact')->ID)?>" class="mn-has-sub">Contact</a></li>
					<li><a href="<?php echo get_page_link(get_page_by_title('Archives')->ID)?>" class="mn-has-sub">Archives</a></li>
					<li><a href="<?php echo get_page_link(get_page_by_title('Private Zone')->ID)?>"class="mn-has-sub">Private Zone</a></li>
					<?php 
					   if(is_front_page()){
					       ?>
				<li class="attr-nav">
                        <a href="#" class="search"><i class="fa fa-search"></i></a>
                        </li>  
                        <?php
					   }?>
                        
                 </ul>
            </div>

            <!-- End Main Menu -->
        </div>
    </nav>
    <!-- End Navigation -->