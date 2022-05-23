<?php
/*
function remove(){
    if ( ! WC()->cart->is_empty()){
        
        remove_action( 'storefront_page', 'storefront_page_header', 10 );
        remove_action( 'storefront_before_content', 'storefront_header_widget_region', 10 );
        remove_action( 'storefront_header', 'storefront_header_container', 0);
        remove_action( 'storefront_header', 'storefront_skip_links', 5 );
        remove_action( 'storefront_header', 'storefront_site_branding', 20 );
        remove_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
        remove_action( 'storefront_header', 'storefront_product_search', 40 );
        remove_action( 'storefront_header', 'storefront_header_container_close', 41 );
        remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
        remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
        remove_action( 'storefront_header', 'storefront_header_cart', 60 );
        remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

    }
}

add_action('wp_head', 'remove');

*/

add_action('woocommerce_shop_loop_item_title', 'prova1');
function prova1() {
    echo 'Best Product';
}


add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );   
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    
function woo_custom_cart_button_text() {
        return __( 'add to cart', 'woocommerce' );
}



	
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
































/*
//per zemren 

add_action( 'wp', 'remove_product_content' );
function remove_product_content() {
// Se il prodotto fa parte della categoria 'Scarpe'
if ( is_product() && has_term( 'Träningsskor', 'product_cat' ) ) {
//... Rimuovo l'immagine
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
// For a full list of what can be removed please see woocommerce-hooks.php
}
}
*/



/*
//per zemren 
add_filter('the_title', 'woocamp_single_product_page_title',10,1);

function woocamp_single_product_page_title ($title){
    if ((is_product()&& in_the_loop())) {
        $title = '<span class ="filterad-title"> ottimo prodotto</span> '.' - ' . $title;
   return $title;

    }
    return $title;
}
*/


 
//add suport för menu och bild 

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


// register widget undersida

register_sidebar(
    [
        'name' => 'footer',
        'description' => ' widget undersida',
        'id' => 'undersida',
        'before_widget' => '  ',
        'after_widget' => '  '
    ]
); 

add_action('wp_enqueue_scripts', 'mina_scripts');
function mina_scripts(){
    wp_enqueue_style('temastil',get_template_directory_uri().'/wp-content/themes/storefront-child/style.css');
 
    
}








?>