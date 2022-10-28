<?php

if (!function_exists('amis_enqueue')) {
    function amis_enqueue() {
        $ver = time();
        wp_register_style('amis_main_css', get_theme_file_uri().'/assets/css/main.css', array(), false);
        wp_register_style('amis_owlcarousel_css', get_theme_file_uri().'/assets/owlcarousel/assets/owl.carousel.min.css', array(), false);
        wp_register_style('amis_owlcarousel_default_css', get_theme_file_uri().'/assets/owlcarousel/assets/owl.theme.default.min.css', array(), false);

        wp_enqueue_style('amis_main_css');
        wp_enqueue_style('amis_owlcarousel_css');
        wp_enqueue_style('amis_owlcarousel_default_css');

        
        wp_register_script('amis_jquery-3.6.1', get_theme_file_uri().'/assets/js/jquery-3.6.1.min.js', array(), $ver);
        wp_register_script('amis_owlcarousel', get_theme_file_uri().'/assets/owlcarousel/owl.carousel.min.js', array('amis_jquery-3.6.1'), $ver);
        wp_register_script('amis_main_js', get_theme_file_uri().'/assets/js/main.js', array(), $ver);

        wp_enqueue_script('amis_jquery-3.6.1');
        wp_enqueue_script('amis_owlcarousel');
        wp_enqueue_script('amis_main_js');
    }
}