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

    <section class="home-section bg-dark-alfa-50 parallax-2" data-background="<?php echo  get_template_directory_uri();?>/assets/images/error.gif" id="home">
        <div class="js-height-full container">
            <!-- Start Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <h1 class="hs-line-2 font-alt white mb-30 mb-xs-30 mt-30 mt-sm-0">404</h1>
                    <div class="hs-line-7-404 font-alt">
                        Page not found
                        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?'); ?></h2>
                    </div>
                    <ul class="btn btn-mod btn-border btn-round btn-medium">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>" class="mn-has-sub">Go Home</a>
                    </ul>
                </div>
            </div>
            <!-- End Hero Content -->
        </div>
    </section>
    
<?php 
get_footer();
?>