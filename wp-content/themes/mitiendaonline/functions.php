<?php 

add_action( 'woocommerce_single_product_summary', 'bottom_extra_whatsapp', 30 );

function bottom_extra_whatsapp() {
  global $product;  
  if ( method_exists( $product, 'get_id' ) ) {
    $product_id = $product->get_id();
  } else {
      $product_id = $product->id;
  }
  $external_url = get_post_meta( $product_id, '_ext_url_cust', true );

  // if ( ! empty( $external_url ) ) {
      // Set HERE your button link
      $link = get_permalink($product_id);
      // $html = '<a href="'.$link.'" class="button alt add_to_cart_button">'.__("Read More", "woocommerce").'</a>';
      echo '<a target="_blank" href="https://api.whatsapp.com/send?phone=51986762468&text=Me%20interesa%20el%20siguiente%20Producto%20'.$link.'" class="button alt add_to_cart_button">Botton Whatsapp</a>';
  // }
  // echo $html;
}

function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {

  if ( method_exists( $product, 'get_id' ) ) {
      $product_id = $product->get_id();
  } else {
      $product_id = $product->id;
  }

  $external_url = get_post_meta( $product_id, '_ext_url_cust', true );

  if ( ! empty( $external_url ) ) {
      // Set HERE your button link
      $link = get_permalink($product_id);
      $html = '<a href="'.$link.'" class="button alt add_to_cart_button">'.__("Read More", "woocommerce").'</a>';
  }
  return $html;
}


add_theme_support('menus');


function wpcontent_svg_mime_type( $mimes = array() ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
  }

add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );
function register_theme_menus() {
    register_nav_menus(
            array(
                'second-menu' => __('Second Menu'),  
                'primary-menu' => __('Primary Menu'),  
            )
    ); 
}
add_action('init', 'register_theme_menus');
 
// always show admin bar
function pjw_login_adminbar( $wp_admin_bar) {
	if ( !is_user_logged_in() )
	$wp_admin_bar->add_menu( array( 'title' => __( 'Log In' ), 'href' => wp_login_url() ) );
}
add_action( 'admin_bar_menu', 'pjw_login_adminbar' );
 // Activar imágenes destacadas en páginas y entradas
add_theme_support( 'post-thumbnails' );

function get_image_url(){ 
    $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), size); 
    $ruta_imagen = $imagen[0];  
    echo $ruta_imagen;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-post-ancestor', $classes) || in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}