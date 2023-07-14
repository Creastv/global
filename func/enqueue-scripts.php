<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
   wp_enqueue_script('go-aos_js','https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ),'3', true );

   if(is_singular('pojazdy')){
    wp_enqueue_script('go-swiper_js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js',  array(), '20130456', true );
    wp_enqueue_script('go-fancybox_js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js',  array(), '20130456', true );
    
    wp_enqueue_script('go-car', get_template_directory_uri().'/src/js/go-car.js', array( 'jquery' ),'3', true );
   }
   if(is_page_template('page-booking.php')) {
      wp_enqueue_script('go-flatpicker', 'https://cdn.jsdelivr.net/npm/flatpickr', array( 'jquery' ),'3', true );
            wp_enqueue_script('go-flatpicker_pl', 'https://npmcdn.com/flatpickr/dist/l10n/pl.js', array( 'jquery' ),'3', true );
      wp_enqueue_script('go-car', get_template_directory_uri().'/src/js/go-booking.js', array( 'jquery' ),'3', true );
   }
    wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
    
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
