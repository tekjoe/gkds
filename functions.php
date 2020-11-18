<?php

function woocommerce_support()
{
    add_theme_support('woocommerce');
}

function gkds_setup()
{
    if (is_page('contact-us')) {
        wp_enqueue_style('leaflet', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css');
        wp_enqueue_style('main', get_theme_file_uri('/styles/styles.css'), null, microtime());
        wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.js');
        wp_enqueue_style('venobox', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.css');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
        wp_enqueue_script('venobox', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.js');
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), null, microtime(), true);
        wp_enqueue_script('map', get_theme_file_uri('/js/map.js'), null, microtime(), true);
    } else {
        wp_enqueue_style('venobox', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.css');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
        wp_enqueue_style('main', get_theme_file_uri('/styles/styles.css'), null, microtime());
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js');
        wp_enqueue_script('glide', 'https://cdn.jsdelivr.net/npm/@glidejs/glide');
        wp_enqueue_script('venobox', 'https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.js');
        wp_enqueue_script('js', get_theme_file_uri('/js/main.js'), null, microtime(), false);
    }
}



// Function to change the button text on the shop page
function customize_shop_button_text($var, $instance)
{
    if (is_shop()) {
        $var =  __('View Openings', 'woocommerce');
    }
    return $var;
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// Remove prices from shop page
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

// Remove related products from shop page
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

add_action('wp_enqueue_scripts', 'gkds_setup');
add_action('after_setup_theme', 'woocommerce_support');
add_filter('woocommerce_product_add_to_cart_text', 'customize_shop_button_text', 10, 2);

function show_phone_registration()
{
    echo get_template_part('partials/phone-registration');
}
add_action('woocommerce_after_shop_loop', 'show_phone_registration');