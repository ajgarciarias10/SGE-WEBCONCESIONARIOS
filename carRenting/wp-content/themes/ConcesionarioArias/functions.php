  <?php 
      //Damos soportes a los temas
       add_theme_support('post-thumbnails');//Imagen destacada
       //Añadimos soporte para los posts-formats
      add_theme_support('post-formats',array('audio','video','link','quote','gallery','image'));
      
      
      
      
      
        function add_theme_scripts(){
             //REGISTRAMOS Y AÑADIMOS A LA COLA LAS HOJAS DE ESTILO Y LOS SCRIPTS DE JS
            wp_register_style('bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css');
            wp_enqueue_style('bootstrap.min');
             wp_register_style('aos', get_template_directory_uri().'/assets/css/aos.css');
            wp_enqueue_style('aos');
             wp_register_style('style', get_template_directory_uri().'/assets/css/style.css');
            wp_enqueue_style('style');
            wp_register_style('style-responsive', get_template_directory_uri().'/assets/css/style-responsive.css');
            wp_enqueue_style('style-responsive');
            wp_register_style('animate.min', get_template_directory_uri().'/assets/css/animate.min.css');
            wp_enqueue_style('animate.min');
            wp_register_style('alvira', get_template_directory_uri().'/assets/css/alvira.css');
            wp_enqueue_style('alvira');
            wp_register_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css');
            wp_enqueue_style('owl.carousel');
            wp_register_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
            wp_enqueue_style('magnific-popup');
            wp_register_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
            wp_enqueue_style('magnific-popup');
            wp_enqueue_style('dashicons');

            
              wp_register_script('jquery.min', get_template_directory_uri().'/assets/js/jquery.min.js',"","",true);
            wp_enqueue_script('jquery.min');
            
            wp_register_script('jquery.easing', get_template_directory_uri().'/assets/js/jquery.easing.js',"","",true);
            wp_enqueue_script('jquery.easing');
            
            wp_register_script('bootstrap.min', get_template_directory_uri().'/assets/js/bootstrap.min.js',"","",true);
            wp_enqueue_script('bootstrap.min');
            
            wp_register_script('SmoothScroll', get_template_directory_uri().'/assets/js/SmoothScroll.js',"","",true);
            wp_enqueue_script('SmoothScroll');
            
            wp_register_script('jquery.scrollTo', get_template_directory_uri().'/assets/js/jquery.scrollTo.min.js',"","",true);
            wp_enqueue_script('jquery.scrollTo');
            
            wp_register_script('jquery.localScroll', get_template_directory_uri().'/assets/js/jquery.localScroll.min.js',"","",true);
            wp_enqueue_script('jquery.localScroll');
            
             wp_register_script('jquery.viewport', get_template_directory_uri().'/assets/js/jquery.viewport.mini.js',"","",true);
            wp_enqueue_script('jquery.viewport');
            
            wp_register_script('jquery.countTo', get_template_directory_uri().'/assets/js/jquery.countTo.js',"","",true);
            wp_enqueue_script('jquery.countTo');
            
            wp_register_script('jquery.appear', get_template_directory_uri().'/assets/js/jquery.appear.js',"","",true);
            wp_enqueue_script('jquery.appear');
            
            wp_register_script('jquery.sticky', get_template_directory_uri().'/assets/js/jquery.sticky.js',"","",true);
            wp_enqueue_script('jquery.sticky');
            
             wp_register_script('jquery.parallax', get_template_directory_uri().'/assets/js/jquery.parallax.js',"","",true);
            wp_enqueue_script('jquery.parallax');
            
            wp_register_script('jquery.fitvids', get_template_directory_uri().'/assets/js/jquery.fitvids.js',"","",true);
            wp_enqueue_script('jquery.fitvids');
            
             wp_register_script('owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js',"","",true);
            wp_enqueue_script('owl.carousel');
            
            wp_register_script('isotope.pkgd', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',"","",true);
            wp_enqueue_script('isotope.pkgd');
            
            wp_register_script('imagesloaded.pkgd', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',"","",true);
            wp_enqueue_script('imagesloaded.pkgd');
            
            wp_register_script('jquery.magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',"","",true);
            wp_enqueue_script('jquery.magnific');
            
            wp_register_script('wow.min', get_template_directory_uri().'/assets/js/wow.min.js',"","",true);
            wp_enqueue_script('wow.min');
            
            wp_register_script('aos', get_template_directory_uri().'/assets/js/aos.js',"","",true);
            wp_enqueue_script('aos');
            
            wp_register_script('masonry.pkgd', get_template_directory_uri().'/assets/js/masonry.pkgd.min.js',"","",true);
            wp_enqueue_script('masonry.pkgd');
            
            wp_register_script('jquery.simple-text', get_template_directory_uri().'/assets/js/jquery.simple-text-rotator.min.js',"","",true);
            wp_enqueue_script('jquery.simple-text');
            
            wp_register_script('all', get_template_directory_uri().'/assets/js/all.js',"","",true);
            wp_enqueue_script('all');
            
            wp_register_script('contact-form', get_template_directory_uri().'/assets/js/contact-form.js',"","",true);
            wp_enqueue_script('contact-form');
            
            wp_register_script('jquery.ajaxchimp', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js',"","",true);
            wp_enqueue_script('jquery.ajaxchimp');
            
            wp_register_script('placeholder', get_template_directory_uri().'/assets/js/placeholder.js',"","",true);
            wp_enqueue_script('placeholder');
            
         

        }
        add_action('wp_enqueue_scripts','add_theme_scripts');//Metemos en cola los scripts
        
       /**
        * 
        function saludo_func (){
         return "Hola Cararcola";
        }
         add_shortcode('saludo','saludo_func');
         */
        /*
        *Actualizar contador de visitas de un post -> solo  se invoca en single.php
        *@param post_id int Post ID
        *
        */
        function add_num_visit($post_id){
         $numvisits = 1;
         //SI NO EXISTE EL CAMPO NUMVISIT LO CREAMOS
          if (!add_post_meta($post_id,'numvisits',$numvisits,true)){
            // SI EXISTE OBTENEMOS EL VALOR DEL CONTADOR Y LE SUMAMOS LA NUEVA VISITA
           $numvisits = get_post_meta($post_id,'numvisits',true);
           //Incrementamos 
            $numvisits++;
            //Actualizamos el contador de visitas con las nueva visita
            update_post_meta($post_id,'numvisits',$numvisits);
          }
          
         
        }
        
            /*
        *Obtener  contador de visitas de un post -> solo  se invoca en single.php
        *@param post_id int Post ID
        *@ return $numvisits Numero de visitas del post
        */
        function get_num_visits($post_id){
           $numvisits = get_post_meta($post_id,'numvisits',true);
           if(empty($numvisits)) $numvisits= 0;
           if($numvisits == 1){
             $sufix = "Visit";
           }
           else{
             $sufix = "Visits";
           }
           return $numvisits ." ".$sufix;
        }
        
        
        /**
         * REGISTRAR AREA E WIDGETS EN LOS SIDEBARS 
         */
         
      function widget_area(){
        $args = array(
            'name' => 'Sidebar Widgets',
            'id' => 'sidebar-widgets',
            'description' => 'Sidebar widgets area',
            'before_widget' => '<div class="myclass">',
            'after_widget' => '</div>',
            );
        
        register_sidebar($args);
        
        $args = array(
            'name' => 'Footer Widgets',
            'id' => 'footerwidgets',
            'description' => 'Sidebar widgets area',
            'before_widget' => '<div class="myclass">',
            'after_widget' => '</div>',
            );
            
        register_sidebar($args);
        
    }
    add_action('widgets_init', 'widget_area');
        
    /*----------------------------AUTHORES---------------------------------------------*/
    /**
     * 
     * Añadir campos de redes sociales al perfil del autor
     * @param $user_methods array Contiene los campos del perfil del autor -> la provee el hook user_contactmethods
     * 
     */
    function add_user_custom_fields($user_methods){
     
     $user_methods['facebook'] = "Facebook:";//La clave es el nombre del campo y el valor su descripcion o label
     $user_methods['twitter'] = "Twitter:";//La clave es el nombre del campo y el valor su descripcion o label
     $user_methods['instagram'] = "Instagram:";//La clave es el nombre del campo y el valor su descripcion o label
     $user_methods['grade'] = "Grade:";//La clave es el nombre del campo y el valor su descripcion o label
     
     return $user_methods;
    }
    add_action('user_contactmethods','add_user_custom_fields');
        
       /**
        *Añadir campos para los skills de los autores
        * que usaremos en ele front-end en la plantilla de autores para hacer los progress bar 
        */
        
        
        function add_user_skills($user){
        //Dibujamos los campos de las skills con etiquetas HTML
         
        ?>
       <br> <h1>User Skills</h1>
        <table class ="form-table">
           <tr>
               <td>
                   <label for="skill1">Skill1:</label>
                   <input type="text" id="skill1" name="skill1" value="<?php echo get_user_meta($user->ID,'skill1',true);?>">
                   <label for="skill1V">Skill1: Value:</label>
                   <input type="text" id="skill1V" name="skill1V" value="<?php echo get_user_meta($user->ID,'skill1V',true);?>">
                   
               </td>
           </tr>
           <tr>
               <td>
                   <label for="skill2">Skill2:</label>
                   <input type="text" id="skill2" name="skill2" value="<?php echo get_user_meta($user->ID,'skill2',true);?>">
                   <label for="skill2V">Skill2: Value:</label>
                   <input type="text" id="skill2V" name="skill2V" value="<?php echo get_user_meta($user->ID,'skill2V',true);?>">
                   
               </td>
           </tr>
           <tr>
               <td>
                   <label for="skill3">Skill3:</label>
                   <input type="text" id="skill3" name="skill3" value="<?php echo get_user_meta($user->ID,'skill3',true);?>">
                   <label for="skill3V">Skill3: Value:</label>
                   <input type="text" id="skill3V" name="skill3V" value="<?php echo get_user_meta($user->ID,'skill3V',true);?>">
                   
               </td>
           </tr>
           <tr>
               <td>
                   <label for="skill4">Skill4:</label>
                   <input type="text" id="skill4" name="skill4" value="<?php echo get_user_meta($user->ID,'skill4',true);?>">
                   <label for="skill4V">Skill4: Value:</label>
                   <input type="text" id="skill4V" name="skill4V" value="<?php echo get_user_meta($user->ID,'skill4V',true);?>">
                   
               </td>
           </tr>
         
        </table>
         <?php
        }
        add_action('show_user_profile','add_user_skills');
        add_action('edit_user_profile','add_user_skills');
         /**
          * Actualizar los campos de las skills de los autores
          * 
          * @param user_id int Contiene el id del autor -> No los suministran los hooks personal_options_update y edit_user_profile
          */
          function save_user_skills($user_id){
           
           update_user_meta($user_id,'skill1',$_POST['skill1']);
           update_user_meta($user_id,'skill1V',$_POST['skill1V']);
           update_user_meta($user_id,'skill2',$_POST['skill2']);
           update_user_meta($user_id,'skill2V',$_POST['skill2V']);
           update_user_meta($user_id,'skill3',$_POST['skill3']);
           update_user_meta($user_id,'skill3V',$_POST['skill3V']);
           update_user_meta($user_id,'skill4',$_POST['skill4']);
           update_user_meta($user_id,'skill4V',$_POST['skill4V']);
           
          }
          add_action('personal_options_update','save_user_skills');
          add_action('edit_user_profile_update','save_user_skills');
          
          /**
           *Obtener el rol de un autor
           * @param $user_id int  Contiene el id del autor 
           * @return string El rol del autor 
           */ 
           function get_author_role($user_id){
            
             $myauthor = get_userdata($user_id); 
             
             $roles = implode(",",$myauthor->roles);
             
             return $roles;
 
           }
        
        /**
         * Obtener imagenes de un autor 
         * Hora de comprobar si tiene gravatar
         * @param $email Contiene el email de gravatar
         */
         function has_gravatar($email) {
         // Craft a potential url and test its headers
         $hash = md5(strtolower(trim($email)));
         $uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
         $headers = @get_headers($uri);
             if (!preg_match("|200|", $headers[0])) {
              $has_valid_avatar = FALSE;
             } else {
               $has_valid_avatar = TRUE;
             }
             return $has_valid_avatar;
         } 
         /**************----------------------------------------------------------------------------------------------------------------------------------------*/
    function list_tags_archives(){
        
        $args = array(
            'orderby' => 'count', // Ordena por el numero de posts que tengan ese tag
            'order' => 'DESC',
            'number' => 17, //Solo las 20 etiquetas mas usadas
        );
        
        $tags = get_tags( $args );  //Devuelve todos los tags del blog como una coleccion de objetos de tipo tag
        
        //Los recorremos e imprimimos por cada tag
        foreach($tags as $tag){
            //Por cada tag lo imprimimos
            echo '<li><i class="fa fa-tag"><a href="'.get_tag_link($tag).'">'.$tag->name.'</a></i></li>';
        }
    }
    function my_file_exists($url){
     $f = pathinfo($url,PATHINFO_EXTENSION);
     return(strlen($f)>0)? true : false;
    }
    
    
    
    
    
     /**************----------------------------------------------- Customizing Comments  ---------------------------------------*/
     
     /** 
      * 
      * Remove url field  comments form 
      * @params $fields array list of comment form fileds -> comment_form_default_fields
      */ 
      
   function erase_url_from_comment($fields){
        unset( $fields['url']);
        return $fields;
    }
    
    add_filter('comment_form_default_fields','erase_url_from_comment');
     
      
     /**
      * Reorder comments form fields 
      * @params $fields array list of comment form fileds  comment_form_fields
      */ 
  
     function reorder_comment_form_fields($fields){
         $auxfields = array();
            array_push( $auxfields,$fields['author']);
            array_push( $auxfields,$fields['email']);
            array_push( $auxfields,$fields['comment']);
            array_push( $auxfields,$fields['cookies']); 
            array_push( $auxfields,$fields['consent']); 
        return $auxfields;
       
    
    }
    
    add_filter('comment_form_fields','reorder_comment_form_fields');
/**
     *  Add content field to comment form fields
     *  @param $fields array list of comment form fields -> nos lo provee el hook comment_form_default_fields
     */
    function add_RGPD_consent($fields){
     

     
        $fields['consent'] = '<p class="comment-form-consent">'.
                             '<input type="checkbox" name="consent" id="consent"'.
                             '<label for="consent"> Check this box to give us permission to publicly post your comment.
                             (Accept our <a href="'.get_page_link(get_page_by_title('Política de privacidad')->ID).'">privacy policy</a>)</label></p>';
        return $fields;
    }
    add_filter('comment_form_default_fields','add_RGPD_consent');
              /**
      * Save comments form fields 
      * @params $comment_id int of comment_post hook
      * 
      */
      
       function save_consent_fields($comment_id){
         $consent_value = $_POST['consent'];
         if ($consent_value == true) {
            $valor = "Checkbox is checked. I accept the privacy policy.";
         }else {
             $valor = "Checkbox is NOT checked. I DO NOT accept the privacy policy.";
         }
         add_comment_meta($comment_id,'consent', $valor, true);
         
    }
    
    add_action('comment_post','save_consent_fields');

      /* Create a new colum in comments admin. area to show the consent field
      * @params $columns array  Comment admin aarea columns -> hoo manage_edit-comments_columns
      * 
      */
       function create_consent_column( $columns){
        
        $columns = array(
            'cb' => '<imput type="checkbox">',
            'author' => 'Author',
            'comment' => 'Comment',
            'consent' => 'Consent',
            'response' => 'In response to',
            'date' => 'Submitted on',
            
            );
        
        return $columns;
    }
    add_action('manage_edit-comments_columns','create_consent_column');
    
           /* Show privaciy policit consent in consent colum in comments admin-area
      * @params $column String  Comment admin aarea columns -> hook manage_comments_custom_column
      * 
      */
             function show_consent_colum($column,$comment_id){
              if($column == 'consent'){
               echo get_comment_meta($comment_id,'consent',true);
              }
             
             }
            add_action('manage_comments_custom_column','show_consent_colum',1,2);
           function better_comments($comment, $args, $depth) {
             $GLOBALS['comment'] = $comment;
               extract($args, EXTR_SKIP);
               $comment_id = get_comment_ID();
             $user_email = get_comment_author_email( $comment_id );
               ?>
                 <ul class="media-list text comment-list clearlist">
                     <li class="media comment-item">
                         <a class="pull-left" href="#" style="padding-right: 20px;">
                             <?php  echo get_avatar( $user_email ,90, 'mysteryman' ,'image',null );?> 
                         </a>
                         <div class="media-body">
                             <div class="comment-item-data">
                                 <div class="comment-author">
                                     <a href=""><?php echo get_comment_author() ?></a>
                                 </div>
                                 <?php echo get_comment_date() ?><span class="separator">&nbsp;</span>
                                 <a href="#"><i class="fa fa-comment"></i>&nbsp;<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
                             </div>
                             <p><?php echo comment_text() ?></p>

                         </div>
                     </li>
                 </ul>
       <?php
       
       }
     
     /*-----------------------------------------------------------------Customize Login Template----------------------------------------------------------------------------------------------- */
     
    function customize_login_template(){?>
     <style>
      #login h1 a , .login h1 a {
       background-image:url("<?php echo  get_stylesheet_directory_uri();?>'/assets/images/concesionario.png'");
       width:200px;
       height : 200px;
       background-size:contain;
       background-postion : center center;
       background-repeat:no-repeat;
       color:cyan;
       
       
      }

      .login{
      background-image:url("<?php echo  get_stylesheet_directory_uri();?>'/assets/images/Koenigsegg_Jesko_White_background_White_565189_1280x640.jpeg'");
       background-size:cover;
       background-postion : center center;
       background-repeat:no-repeat;
       
      }


      
     </style>
   <?php
   
    } 
    add_action('login_enqueue_scripts','customize_login_template');
    
    /**
     * 
     * 
     * Change login logo url
     */
     
     function change_login_logo_url(){
      
      
      return home_url();
      
     }
     add_filter('login_headerurl','change_login_logo_url');
     /**
      * Change login erro
      * 
      * 
      */ 
      function change_login_error(){
       return "Oopps ! You must enter a valid username and pasword at form";
       
      }
       add_filter('login_errors','change_login_error');
       
       
   /**
     * Filter that trims the excerpt number of words out of index.php
     * @param   $query  The WordPress Query var
     */
    function add_custom_post_type_to_archive( $query ){
        //Si preguntando si es busqueda por categorias, por tags o por fecha en archive.php
        if( is_category() || is_tag() || is_date() ){
            //Establecemos en la consulta por defecto WP el calor de post_type a post
            //y ajgarciarias_cr para que incluya tanto los post normales como los custom post types
           $query->set('post_type', array( 'post','ajgarciarias_cr') );
        }
    }
    add_action('pre_get_posts', 'add_custom_post_type_to_archive');
    
 
 
    //--------------------------------------------------------------------------------------------------//
    /**
     * Customizing search form 
     */ 
     function custom_search_form( $form ) {
      $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="custom-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" class="input-md round form-control" id="s" />
        <input type="submit" class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
      </div>
      </form>';

      return $form;
    }
    add_filter( 'get_search_form', 'custom_search_form', 40 );
    
    
 function custom_excerpt_length($excerpt) {
     if (has_excerpt()) {
         $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", 9));
     }
     return $excerpt;
 }
 add_filter("the_excerpt", "custom_excerpt_length", 999);
     

    function add_responsive_class( $content ) {

        // Nos aseguramos de que tenemos algo en $content

        if ( !empty( $content ) ) {

            // convertimos el contenido del post a codificación UTF-8

            $content = mb_convert_encoding( $content, 'HTML-ENTITIES',  'UTF-8' );

            $document = new DOMDocument(); // Este objeto representará al documento HTML

            // Deshabilitamos los errores de la librería que se encarga de la conversión (libxml) y los deja en manos del programador

            libxml_use_internal_errors(true);

            $document->loadHTML( utf8_decode($content) ); // Ahora tenemos el contenido del post codificado en utf-8 como un DOM en $document

            $imgs = $document->getElementsByTagName('img'); // Devuelve un colección (array) de nodos img

            // Recorremos la colección para acceder a cada uno de sus nodos

            foreach( $imgs as $img) {

                $img->setAttribute('class', 'img-responsive');

                $img->setAttribute('sizes','');

               

                $img->setAttribute('width', '100%');

                $img->setAttribute('height', 'auto');

                /* Si tuviese una clase que queremos conservar ...

                $existing_class = $img->getAttribute('class');

                $img->setAttribute('class',  "$existing_class img-responsive");

                */

            }

            

            // SALVAMOS LOS CAMBIOS

            $html = $document->saveHTML();

            // Retornamos el contenido con las etiquetas img y sus nuevos atributos

            return $html;

        }

    }



    add_filter('the_content','add_responsive_class');
    
?>

