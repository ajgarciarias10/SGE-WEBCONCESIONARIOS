<?php 
/*
    Plugin Name: WordPress CarRenting
    Plugin URI: https://download.neomode.org
    Description: Creates an interfaces to manage custom post type CarRenting
    Version: 1.0.0
    Author: Imagos
    Author URI: http://www.neomode.org
    License: GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

        //Comprobar que el plugin no se ha ejecutado tecleando su url en la dirección del navegador
        
        
        defined('ABSPATH') or die ('You can´t reach my plugin, moron!');
        
     class CarRenting_projects{
         public $plugin_name;
         function __construct(){
              $this->plugin_name = plugin_basename(__FILE__);
              add_shortcode('show_fields',array($this,'show_custom_fields'));
              add_shortcode('show_fields_single',array($this,'show_custom_fields_single'));
         }
         function execute_actions(){
             add_action('init',array($this ,'register_carrenting_projects'));
             //Creacion de la metabox que contendra los custom-post-fields
             add_action('add_meta_boxes',array($this,'ajgarciarias_cr_add_metabox'));
             //Guardamos los custom post fields en la BDD
             add_action('save_post',array($this,'save_custom_post_fields'));
             //Registramos las hojas de estilo y los js del plugin
             //PARA EL ADMIN AREA
             add_action('admin_enqueue_scripts',array($this,'admin_put_in_queue'));
             //PARA EL FRONT ENDS
             add_action('wp_enqueue_scripts',array($this,'put_in_queue'));
             //creamos una opcion para los settings en el dashboard
             add_action('admin_menu',array($this,'add_settings_option'));
             //Crear una subopcion e nsettigns
            add_action('admin_menu',array($this,'add_settings_option_second_level'));
            //Crear un elace para la pagina de setiigns en el panel del plugon de la pagina de plugins
            add_filter("plugin_action_links_$this->plugin_name",array($this,'add_settings_link_in_panel'));
            //Registramos los settings en el admin area
            add_action('admin_init',array($this,'ajgarciarias_cr_register_settings'));
            add_action('admin_notices',array($this,'ajgarciarias_cr_noticies'));
            
         
         }
         /**
          * Funcion de callback para mostrar los custom post-fields show_custom_fields
          * 
          */ 
          function show_custom_fields($atts){
              //Recogemos el atributo del shortcode
              $postid= shortcode_atts(array(
                  'id'=>1,
                  ),$atts);
                  $post_id = $postid['id'];
                $options = get_option('ajgarciarias_cr_settings');
              //Dibujamos los campos
              ?>
              
           <div class="clearfix">
                <div class="product-item-price" style ="color:<?php echo $options['ajgarciarias_cr_color']?>" >
                    <span class="start-price"><?php  echo get_post_meta($post_id,'year',true)?></span>
                    <span class="price"><?php  echo get_post_meta($post_id,'price',true)?></span>
                </div>
                <div class="product-reviews-summary" >
                    <div class="rating-summary">
                        <!--<//?php  echo get_post_meta($post_id,'rating',true)?>!-->
                        <div class="rating-result" title="<?php  echo get_post_meta($post_id,'rating',true)?>%">
                        <span class="width-<?php  echo get_post_meta($post_id,'rating',true)?>" style ="color:<?php echo $options['ajgarciarias_cr_color']?>">
                            <span><span><?php echo $options['ajgarciarias_cr_num_stars']?></span>% of <span>100</span></span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
          }
          /**
           * Funcion de callback para registrar los settings de la pagina settings del plugin
           */
           function ajgarciarias_cr_register_settings(){
               
               //1º Nombre del grupo de settings  
               //2º Nombre del setting
               //3º Array de argumentos , indipensable para la  funcion de callback de validar los campos
               register_setting('ajgarciarias_cr_settings', 'ajgarciarias_cr_settings',array($this,'settings_validate'));
           }
           /**
           * Funcion de callback de settings que se utiliza para validar los contenidos de los campos , 
           * guardar contenidos de los campos cuando se pulse Guardar
           */
            function settings_validate($args){
            //Validar campos del form de los settings
            
            if(!isset($args['ajgarciarias_cr_color'])){
                $args['ajgarciarias_cr_color'] == "#ede9df";
            }
            if(!isset($args['ajgarciarias_cr_num_stars']) || ($args['ajgarciarias_cr_num_stars'])!=50 && ($args['ajgarciarias_cr_num_stars'])!=100 ){
                $args['ajgarciarias_cr_num_stars'] = "50";
                
                add_settings_error('ajgarciarias_cr_settings','invalid_num_stars','Please enter 50 or 100 for star rating number !','error');
            }
                
                
                
                return $args;
            }
            function ajgarciarias_cr_noticies(){
                settings_errors();
            }
          function show_custom_fields_single($atts){
               //Recogemos el atributo del shortcode
              $postid= shortcode_atts(array(
                  'id'=>1,
                  ),$atts);
                  $post_id = $postid['id'];
                  $options = get_option('ajgarciarias_cr_settings');
                  
              //Dibujamos los campos
              ?>
                
                 <table class="table table-bordered table-striped mt-10">
                              <tbody>
                                 <tr>
                                    <th>
                                       Categories
                                    </th>
                                    <th>
                                       Value
                                    </th>
                                 </tr>
                                 <tr>
                                    <td>
                                       Year
                                    </td>
                                    <td>
                                       <?php  echo get_post_meta($post_id,'year',true)?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Color
                                    </td>
                                    <td>
                                       <?php  echo get_post_meta($post_id,'color',true)?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Change
                                    </td>
                                    <td>
                                       <?php  echo get_post_meta($post_id,'change',true)?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       Fuel
                                    </td>
                                    <td>
                                       <?php  echo get_post_meta($post_id,'fuel',true)?>
                                    </td>
                                 </tr>
                                 <td>
                                    Doors
                                 </td>
                                 <td>
                                    <?php  echo get_post_meta($post_id,'doors',true)?>
                                 </td>
                                 </tr>
                              </tbody>
                           </table>
                       
              <?php
          }
         
        /**
         * Register my custom post type
         */ 
            function register_carrenting_projects(){
                //definir array de soporte
                $supports = array(
                    'title',
                    'editor',
                    'excerpt',
                    'author',
                   // 'custom-fields',
                    'comments',
                    'thumbnail',
                    );
                //definir array de etiquetas
                $labels = array(
                    //Poner en custom las reviews de mi coches
                    'name' => _x('Cars Renting','plural'),
                     'singular_name' => _x('Car Renting','singular'),
                     'menu_name' =>  _x('Car Renting','admin menu'),
                     'menu_admin_bar' =>  _x('Car Renting','admin bar'),
                     'add_new' =>  _x('Add New Car','add_new'),
                     
                     'all_items' => __('All Cars'),
                     'add_new_item'=> __('Add New Cars'),
                     'view_item' => __('View Cars'),
                     'search' => __('Search Cars'),
                     'not_found' => __('No Cars Found'),
  
                    );
                //definir array de argumentos
                $args = array(
                 'supports' => $supports,//Establece que apareceran en el admin area del custom post type
                 'labels' => $labels,// Establece las etiquetas de los elementos del admin area para el custom post type
                 'public' => true, //Para que se pueda acceder desde donde quieras admin area y el front end 
                 'hierarquical' => false, //Para que  no haya jerarquia, no posseee post hijo
                 'query_var' => true, //Para que aparezca en la consulta de WP_QUERY() PARA TENER ACCESO A LOS CUSTOM_POST_TYPE
                 'has_archive' => true, //Para que aparezca en el template archives
                 'show_in_menu' => true, //Para que aparezca en el menu de wp_admin
                 'menu_position' => 5, //Posiciion del menu
                 'menu_icon'=>'dashicons-car',//Establece el icono
                 'show_in_rest'=>false,//Establece el editor gutenberg //Utiliza la api REST

                    );
                //Registramos  el custom post type
                register_post_type('ajgarciarias_cr',$args);
                //Registramos  la taxonomoia del custom post
                $args = array(
                    'show_admin_colum' => true,
                    'hierarchical' => false,
                    'labels' => 'Car Tags',
                    'rewrite' => true,
                    'query_var'=>true,
                    
                    
                    );
               register_taxonomy('ajgarciarias-cr','ajgarciarias_cr',$args);
               flush_rewrite_rules();
               
                //Si queremos los paneles tags y categoria
                 register_taxonomy_for_object_type('category','ajgarciarias_cr');
                register_taxonomy_for_object_type('post_tag','ajgarciarias_cr');
                
            }
            
            /**
             * Funcion de callback que carga las hojas de estilo y los js para el back end
             */ 
            
              function admin_put_in_queue() {
            wp_register_style('CarRenting_projectadmin_css', plugins_url('admin/CarRenting_projectadmin.css',__FILE__));
            wp_enqueue_style('CarRenting_projectadmin_css');
            
            wp_register_script('CarRenting_projectadmin_js', plugins_url('admin/CarRenting_projectadmin.js', __FILE__));
            wp_enqueue_script('CarRenting_projectadmin_js');
        }
        
         /*
         * Funcion de callback que carga las hojas de estilo y los js area en el front end
         */
        function put_in_queue() {
            wp_register_style('crenting_project_css', plugins_url('css/CarRenting_project.css', __FILE__));
            wp_enqueue_style('crenting_project_css');
            
            wp_register_script('crenting_project_js', plugins_url('js/CarRenting_project.js', __FILE__));
            wp_enqueue_script('crenting_project_js');
        }
          function  add_settings_option(){
              //            Nombre de la pagina                 Titulo del menu                     capacidades             slug                        //Callback que dibuja la hoja de sttings
              add_menu_page('CarRenting_projects Settings Page','CarRenting_projects Settings', 'manage_options','carrenting_projects_settings',array($this,'add_settings_option_callback'),'dashicons-car',100);
          }

          /**
           * Funcipn de callback que crea una subopcion en el settings del dashboard para los settings del plugin
           */ 
          function add_settings_option_second_level(){
                //            Nombre de la pagina                 Titulo del menu                     capacidades             slug                        //Callback que dibuja la hoja de sttings
              add_options_page('CarRenting_projects Settings Page 2','CarRenting_projects Settings 2 ', 'manage_options','carrenting_projects_settings',array($this,'add_settings_option_callback'),100);
              
          }
          /**
           * Funcipn de callback que crea una enlace en el panel del plugin en la pagina de plugins
           *  @params $links array de objectos que tiene los links para nuestro plugin
           *  @return $links obkects array
           */ 
              
                function add_settings_link_in_panel($links){
                    //Tenemos que hallar la url de la pagina de settings
                    
                    //limpiamos la url|| añadimos la url al backend
                    $url=esc_url(add_query_arg('page','carrenting_projects_settings',get_admin_url().'admin.php'));
                    
                    //creamos una etiqueta <a> con esa url
                    $enlace='<a href="'.$url.'">Settings</a>';
                    array_push($links,$enlace);
                    return $links;
                }
          
            
            function add_settings_option_callback(){
                require_once(plugin_dir_path(__FILE__).'admin/admin-settings.php');
            }
            
            function  carRenting_projects_activation(){
             flush_rewrite_rules();
            }
            function  carRenting_projects_deactivation(){
             flush_rewrite_rules();
            }

            /**
             * Añadimos la metabox con los custom-post_fields
             * @param $screens Object of class WP_Screen-> Nos lo da el hook add_metaboxes
             */ 
            function ajgarciarias_cr_add_metabox($screens){
             // WP_Screen son todas las pantallas del admin area, todo lo mostrado alli
            // Le asignamos como array nuestro custom-post-type para aislar aquellas pantallas que lo contengan
                $screens = array('ajgarciarias_cr');
                //Recorremos las pantallas que contenga el custom-post-type para crearles a cada una la metabox
                foreach($screens as $screen){
                    add_meta_box('metabox','Car Products',array($this,'metabox_callback'),$screen,'advanced');
                    
                }
                
            }
            /*
            *  Funcion de callback de add_meta_box que dibyja los customs-post-fields del custom-post-type
            *  @param  $post    Object of class post -> Nos lo da la funcion add_meta_box()
            */
            function metabox_callback($post){
                wp_nonce_field(basename(__FILE__),'ajgarciarias_cr_nonce');
                //harvesting
                //Año del coche
                $year = get_post_meta($post->ID,'year',true);
                $color = get_post_meta($post->ID,'color',true);
                $price = get_post_meta($post->ID,'price',true);
                $change = get_post_meta($post->ID,'change',true);
                $fuel = get_post_meta($post->ID,'fuel',true);
                $power = get_post_meta($post->ID,'power',true);
                $doors = get_post_meta($post->ID,'doors',true);
                $rating = get_post_meta($post->ID,'rating',true);
                ?>
                
                <div class ="details">
                    <h4>Car Details</h4>
                    <div class ="standard">
                        <label for ="year">Year:</label>
                        <input type="number" id="year" name="year" size="4" value ="<?php echo $year;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="color">Color:</label>
                        <input type="text"  id="color" name="color" size="20" value ="<?php echo $color;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="price">Price:</label>
                        <input type="text" id="price" name="price" size="10" value ="<?php echo $price;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="change">Change:</label>
                        <input type="text" id="change" name="change" size="4" value ="<?php echo $change;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="fuel">Fuel:</label>
                        <input type="text" id="fuel" name="fuel" size="8" value ="<?php echo $fuel;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="power">Power:</label>
                        <input type="text" id="power" name="power" size="4" value ="<?php echo $power;?>"/>
                    </div>
                    <div class ="standard">
                        <label for ="doors">Doors:</label>
                        <input type="number" id="doors" name="doors" size="1" value ="<?php echo $doors;?>"/>
                    </div>
                       <div class ="standard">
                        <label for ="rating">Rating:</label>
                        <input type="number" id="rating" name="rating" size="1" value ="<?php echo $rating;?>"/>
                    </div>
                    
                </div>
                
                
                <?php 
                
                
                
            }
            
            /**
             * Funcion de calllback que guardará los custom-post-fields en la BBDD
             * @param $post_id int post ID _> nos lo da el hook 'save_post'
             */ 
            function save_custom_post_fields($post_id){
                //Verficar si el campo nonce es válido
                $is_valid_nonce = (isset($POST['ajgarciarias_cr_nonce']) && wp_verify_nonce($_POST['ajgarciarias_cr_nonce'],basename(__FILE__)))? 'true' : 'false';
                
                //Comprobar si estoy en un autosave 
                $is_autosave = wp_is_post_autosave($post_id);
                //Comprobar si estoy en revision
                $is_revision = wp_is_post_revision($post_id);
                   if($is_revision || $is_autosave || !$is_valid_nonce){
                    return;
                }
                //Comprobar  si el usuario tiene permiso para editar el post
               if(!current_user_can('edit_post',$post_id)){
                    return;
                }
                //Saneamos el contenido de los campos 
              
                $year =  sanitize_text_field($_POST['year']);
                $color =  sanitize_text_field($_POST['color']);
                $price =  sanitize_text_field($_POST['price']);
                $change =  sanitize_text_field($_POST['change']);
                $fuel = sanitize_text_field($_POST['fuel']);
                $power =  sanitize_text_field($_POST['power']);
                $doors =  sanitize_text_field($_POST['doors']);
                $rating =  sanitize_text_field($_POST['rating']);

                
                //Ahora podemos guardar su contenido en la BBDD
                //update_post_m,eta() actualiza el campo sie existe o no en la BD
                  update_post_meta($post_id,'year',$year);
                  update_post_meta($post_id,'color',$color);
                  update_post_meta($post_id,'price',$price);
                  update_post_meta($post_id,'change',$change);
                  update_post_meta($post_id,'fuel',$fuel);
                  update_post_meta($post_id,'power',$power);
                  update_post_meta($post_id,'doors',$doors);
                  update_post_meta($post_id,'rating',$rating);
                
            }
          
     }
     if(class_exists('CarRenting_projects')){
         $my_project = new CarRenting_projects();
         $my_project->execute_actions();
         
         
     }
     
     //Registramos los hooks de activacion y desactivacion del plugin
     register_activation_hook(__FILE__,array($my_project,'carRenting_projects_activation'));
     register_deactivation_hook(__FILE__,array($my_project,'carRenting_projects_deactivation'));