<?php 
/* Registrera meny */
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Top menu'
    ));
}



/* Thumbnail support */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300);
add_image_size('media-thumb', 300);
add_image_size('media-medium', 600);
add_image_size('media-big', 1200);

// add_image_size( 'thumbnail-head', 600);   
// add_image_size( 'thumbnail-head-2x', 900);   
// add_image_size( 'thumbnail-head-4x', 1600); 



/* Enable dynamic header image */
 $args = array (
     'width'            =>  1600,
     'height'           =>  600,
     'default-image'    =>  '',
     'uploads'          =>  true,
     'flex-width'         => true,
     'flex-height'        => true
 );

add_theme_support('custom-header', $args);



/* Banner Content Hook */
function get_banner() {
    do_action('get_banner');
}

function include_banner_content() {
	include './wp-content/themes/PBM/includes/banner.php';
}

add_action('get_banner', 'include_banner_content', 1);



/* Contact Info Hook */
function get_contact_info() {
    do_action('get_contact_info');
}

function include_contact_info() {
	include './wp-content/themes/PBM/includes/contact-info.php';
}

add_action('get_contact_info', 'include_contact_info', 1);



/* Contact Form Hook */
function get_contact_form() {
    do_action('get_contact_form');
}

function include_contact_form() {
	include './wp-content/themes/PBM/includes/contact-form.php';
}

add_action('get_contact_form', 'include_contact_form', 1);



/* Social Media Hook */
function get_social_media() {
    do_action('get_social_media');
}

function include_social_media() {
    include './wp-content/themes/PBM/includes/social-media.php';
}

add_action('get_social_media', 'include_social_media', 1);



/* Use JS files */
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);



/* WooCommerce custom text */
add_action( 'woocommerce_before_single_product_summary' , 'get_product_description', 5 );

function get_product_description() {
  global $product;
  echo '<div class="art-single-info"><p>';
  echo $product->description;
  echo '</p></div>';
}



/* WooCommerce Support */
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



/* Product "slides" support */
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



/* In stock support */
add_action( 'woocommerce_before_shop_loop_item_title', 'in_stock');

function in_stock() {
   global $product;
   if ($product->is_in_stock() ) {
       echo woocommerce_template_single_price(); 
   } else {
       echo '<span class="sold-out">&bull; Sold</span>';
   }
}



/* Purchase Enquiry Form Hook */
function get_purchase_enquiry() {
    do_action('get_purchase_enquiry');
}

function include_purchase_enquiry() {
	include './wp-content/themes/PBM/includes/purchase-enquiry.php';
}

add_action('get_purchase_enquiry', 'include_purchase_enquiry', 1);



/* Purchase Info Hook */
function get_purchase_info() {
    do_action('get_purchase_info');
}

function include_purchase_info() {
	include './wp-content/themes/PBM/includes/purchase-info.php';
}

add_action('get_purchase_info', 'include_purchase_info', 1);



/* News Hook */
function get_news() {
    do_action('get_news');
}

function include_news() {
	include './wp-content/themes/PBM/includes/news.php';
}

add_action('get_news', 'include_news', 1);