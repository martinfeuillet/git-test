<?php

function decouverteCard($args=null){
    ?>
    <div class="decouverte--card">
                 <i class="fa-solid <?= $args['icon'] ?> fa-4x"></i>
                <hr>
                <h3><?= $args['title'] ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi minus delectus porro</p>
                <a href="">En savoir plus</a>
            </div>
            <?php
}

function hotel_theme_scripts(){
    wp_enqueue_style('hotelTheme', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hotelHeader', get_template_directory_uri() . '/style/header.css');
    wp_enqueue_style('hotelFrontPage', get_template_directory_uri() . '/style/front-page.css');
    wp_enqueue_script('font-awesome',"//kit.fontawesome.com/828beef047.js");

}

add_action( 'wp_enqueue_scripts', 'hotel_theme_scripts' );


function hotel_fonctionnalites(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('headerMenu', 'menu principal de navigation');
    register_nav_menu('footerMenu', 'menu footer ');
}

add_action('after_setup_theme','hotel_fonctionnalites');
