<?php
function theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
	// Include Bootstrap CSS from CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    // Include jQuery from CDN
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
	// Include Slick JS from CDN
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true); 
	wp_enqueue_script('reviews-slider-js', get_template_directory_uri() . '/assets/js/reviews-slider.js', array('jquery', 'slick-js'), null, true); // Enqueue slider.js
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'psd-gator-theme'), //main menu on header
		'footer-left' => __('Footer Left side', 'psd-gator-theme'),//menu at left of the footer section 
        'footer-center-left' => __('Footer Center-Left side', 'psd-gator-theme'),//menu at center-left of the footer section 
        'footer-center-right' => __('Footer Center-Right side', 'psd-gator-theme'),//menu at center-right of the footer section
        'footer-right' => __('Footer Right', 'psd-gator-theme'),//menu at right of the footer section 
    ));
}
add_action('after_setup_theme', 'theme_setup');
?>