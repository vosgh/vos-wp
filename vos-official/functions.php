<?php
     add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles'); 

    function add_scripts_and_styles() {
        /*wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . 'path', false, null, true);
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'main', get_template_directory_uri() . 'path', array('jquery'), null, true); */
        wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/js/swiper-bundle.min.js', false, null, true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('swiper-script'), null, true);

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
?>