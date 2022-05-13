<?php

function universite_files(){
    wp_enqueue_script('inspiro_extra_script',get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_script( 'admin-ajax', get_stylesheet_directory_uri() . '/assets/admin-ajax.js', '', '', true );
    wp_enqueue_script('rest-ajax', get_stylesheet_directory_uri() . '/assets/rest-ajax.js', '', '', true);
    wp_localize_script('universite_extra_script','universiteUrl',array(
        'url' => get_site_url(),
        'nonce'=>wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts','universite_files');

require('inc/admin-ajax.php');
require('inc/rewrite-api.php');
require('inc/rest-api.php');