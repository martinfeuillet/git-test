<?php

require get_theme_file_path('inc/integration.php');



function ingenius_files(){
    wp_enqueue_style('custom-font',"//fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Fira+Sans&family=Poppins&display=swap");
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    wp_enqueue_script( 'ajax-pagination',  get_stylesheet_directory_uri() . '/assets/js/ajax-call.js', array( 'jquery' ), '1.0', true );

    wp_enqueue_style('custom-tailwind', get_theme_file_uri('/dist/output.css'));
  
}

add_action('wp_enqueue_scripts','ingenius_files');


function ingenius_forms(){
    $request = wp_remote_get('https://www.monaco.edu/inseecu/fr/api/form/demande-documentation');
    if( is_wp_error( $request ) ) {
        return false; // Si il y a une erreur, on s'arrête là
    }
    $body = wp_remote_retrieve_body($request);
    $data = json_decode( $body,true ); // convertir Json en variable php
    $countries = [];
    foreach ($data['fields'] as $item ) {
        if ($item['name'] == 'country') {
            foreach ($item['values'] as $countrie) {
                array_push($countries,$countrie['label']);
            }
        }
    }
    return $countries;



}
