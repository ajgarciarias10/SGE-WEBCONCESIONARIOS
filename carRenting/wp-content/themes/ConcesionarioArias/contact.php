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
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Contact</h1>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                        <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Contact')->ID)?>">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt mt-0 mb-20 mb-sm-40">Our Contacts</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-text align-center mb-30 mb-xs-30">
                      If you would like to contact with us you must type at the down form.
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1 mb-20 mb-xs-40">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Call Us
                            </div>
                            <div class="ci-text">
                                +34 958 89 38 50
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Address
                            </div>
                            <div class="ci-text">
                                 C. Primavera, 26, 18008 Granada
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Email
                            </div>
                            <div class="ci-text">
                                <a href="mailto:info@yoursite.com">carsUk@uk.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Enter your full name" pattern=".{3,100}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Enter your email address" pattern=".{5,100}" required>
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <div class="form-group">
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Enter your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="cf-left-col hidden-xs">
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> All the fields are required
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div id="result"></div>
                </form>
            </div>
        </div>
    </section>
<?php 
get_footer()
?>