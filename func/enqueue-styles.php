<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function enqueue_styles() {
    wp_enqueue_style( 'go-style', get_stylesheet_uri() );
	wp_enqueue_style( 'go-aos_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
	 if(is_singular('pojazdy')){
		wp_enqueue_style( 'go-swipeer_css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css' );
		wp_enqueue_style( 'go-fancybox_css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', '', '4.0' );
	 }
	 wp_enqueue_style( 'go-flatpicker_css', 'https://npmcdn.com/flatpickr/dist/themes/airbnb.css' );
	wp_enqueue_style( 'go-custome-style', get_template_directory_uri().'/src/css/go-main.min.css' );  
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
