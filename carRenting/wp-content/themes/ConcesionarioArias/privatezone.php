
<?php 
    get_header();
    //Comprabamos si hay algun usario logueado y en su caso recopilamos la info necesaria
    if(is_user_logged_in()){
        $user= wp_get_current_user();//Devuelve objeto de tipo user con el user que esta logueado
        $user_name = $user->display_name;//Obtenemos su nombre público
        $rol = get_author_role($user->ID);//Obtenemos su rol
        
        
        $saludo = 'Hello <span class ="mustard">'.$user_name.'</span><br/>You are logged as <span class ="mustard">'.$rol.'</span>'; 
    }else{
        $saludo="Log In";
        
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
    <!-- End Navigation -->
    <!-- Start Head Section -->
    <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo  get_template_directory_uri();?>/assets/images/full-width-images/2banner-tucoche70.jpg">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-12 general-breadcrumbs">
                    <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs"><?php echo $saludo?></h1>

                    <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                                            <?php
                        if(is_user_logged_in()){
                            switch($rol){
                                case 'administrator':
                                    echo "¡Welcome Admin!";
                                    break;
                                case 'editor':
                                    echo "¡Welcome editor!";
                                    break;
                                case 'author':
                                    echo "¡Welcome author!";
                                    break;
                                case 'contributor':
                                    echo "¡Welcome contributor!";
                                    break;
                                case 'subscriber':
                                    echo "¡Welcome subscriber!";
                                    break;
                            }
                                                    //Mostrar link admin area

                        }

                    ?>
                    </div>
                    <div class="hs-line-3 font-alt mod-breadcrumbs">
                       <a href="<?php echo get_page_link(get_page_by_title('Home')->ID)?>">Home</a> / <a href="<?php echo get_page_link(get_page_by_title('Private Zone')->ID)?>">Private Zone</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php	get_template_part('nav');?>
    <div class="page-section">
        <div class="container relative">
            <div class="align-center mb-20 mb-xxs-30">
                <ul class="nav nav-tabs tpl-minimal-tabs">
                    <li >
                      <?php
                        if(is_user_logged_in()){
                          wp_loginout(get_permalink());
                        }
                        else{
                            echo '<a href="#mini-one" data-toggle="tab" class="darker">Login</a>';
                        }
                    ?> 
                      
        
                    </li>
                    <li >
                                    <?php
                        if(is_user_logged_in()){
                        wp_register('','');
                        }
                        else{
                          wp_register('','');
                        }
                    ?>
            
                    </li>
                </ul>
            </div>
            <div class="tab-content tpl-minimal-tabs-cont section-text">
                <div class="tab-pane fade in active show" id="mini-one">
                    <div class="row">
                           
                        <div class="col-md-4 offset-md-4">
                                       <?php 
                                    if(!is_user_logged_in()){
                                    //Visualizar el formulario de login 
                                    wp_login_form();
                                    
                                    }
                           ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
</div>
<?php  
    get_footer(); 
?>
