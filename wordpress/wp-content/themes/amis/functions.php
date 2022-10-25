<?php

// SET UP
if( !defined('THEME_IMG_PATH')){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets/img' );
   }

// INCLUDES
include(get_theme_file_path().'/includes/enqueue.php');


// HOOK ACTION - FILTER
add_action('wp_enqueue_scripts', 'amis_enqueue');

