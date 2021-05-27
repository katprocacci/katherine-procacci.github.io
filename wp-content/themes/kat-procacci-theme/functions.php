<?php

function procacci_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet');
    wp_enqueue_style('custom-google-fonts-two', '//fonts.googleapis.com/css?family=Dancing+Script|Girassol&display=swap');
    wp_enqueue_style('custom-google-fonts-three', '//fonts.googleapis.com/css?family=Gelasio&display=swap');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=yourkeygoeshere', NULL, '1.0', true);
    wp_enqueue_script('axios', '//cdn.jsdelivr.net/npm/axios/dist/axios.min.js', NULL, '1.0', true);
    wp_enqueue_script('glidejs', '//cdn.jsdelivr.net/npm/@glidejs/glide', NULL, '1.0', true);

    wp_enqueue_script('main-procacci-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('procacci_main_styles', get_stylesheet_uri());

    //wp_enqueue_script('main-procacci-js', 'http://localhost/bundled.js', NULL, '1.0', true);


    wp_localize_script('main-procacci-js', 'procacciData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts', 'procacci_files');

function procacci_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'procacci_features');

