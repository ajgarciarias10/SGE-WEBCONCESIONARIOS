<?php 
  defined('WP_UNINSTALL_PLUGIN') or die ('HERE IS NOT WHERE YOU ARE  supossed to be you silly human - ,');
    //lIMPIAR LA BD
    //Forma  Fácil
    //Recogemos en un resutset todos los posts que sea de type custom post type
    //Los recorremos y los vamos borrando uno a uno
    // $erase_posts = get_posts(array('post_type'=>'ajgarciarias_cr',
    //                                 'numberposts' => -1));
    //         foreach($erase_posts as $erase_post){
    //             wp_delete_post($erase_post->ID);
    //         }
    //FOMRA COOOL _> VOY A YSER COMO PREFIJO DE TABLAS CADA UNA DDEBE PONER SU PROPIO PREFIJO DE SU BDD
    //   global $wpdb;
    //   //Primero elimiminos los post de nuestro custom post type
    //   $wpdb->query("Delete From wp_posts where `post_type` = 'ajgarciarias_cr'");
    //   //Despues borramos los posible metadatos que hayan creado esos posts(Borramos todos los metadatos excepto los de los posts)
    //   $wpdb->query("Delete From wp_postmeta where `post_id` NOT IN (Select id From wp_posts)");
    //   //Por ultimo borramos las posibles relaciones que existan y no pertenezca  a ningún posts de los que todavía existen
    //   $wpdb->query("Delete From wp_term_relationships where `object_id` NOT IN (Select id From wp_posts)");


?>