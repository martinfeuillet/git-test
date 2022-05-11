<?php


function hotel_post_types(){
    register_post_type('room',array( 
        'map_meta_cap' => true,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'rooms'
        ),
        'labels' => array(
           'name' => 'Rooms',
           'add_new_item' => "add new room",
           'all_items' => "all rooms",
           'singular_name'=>'room'
        ),
        'menu_icon' =>'dashicons-admin-multisite',
        'supports' => array('title','editor','thumbnail')
        ));
   
}


add_action('init','hotel_post_types');
