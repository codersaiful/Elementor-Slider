<?php

add_action( 'wp_enqueue_scripts', 'es_enqueue_scripts', 999 );
function es_enqueue_scripts(){
    wp_register_script( 'es_swipper',  ES_BASE_URL . 'assets/js/swiper.min.js', ['jquery'], '1.0.0', false);
    //wp_register_script($handle, $src, $deps, $ver, $in_footer);
    wp_enqueue_script( 'es_swipper' );
 
    
    wp_register_script( 'es_slider',  ES_BASE_URL . 'assets/js/slider.js');
    //wp_register_script($handle, $src, $deps, $ver, $in_footer);
    wp_enqueue_script( 'es_slider' );
 
    
    wp_register_style( 'es_swipper', ES_BASE_URL . 'assets/css/swiper.min.css' );
    wp_enqueue_style( 'es_swipper' );
    
    wp_register_style( 'es_style', ES_BASE_URL . 'assets/css/style.css' );
    wp_enqueue_style( 'es_style' );
}

//add_action( 'wp_enqueue_scripts', 'es_enqueue_scriptssss', 9999 );
//function es_enqueue_scriptssss(){
//    wp_register_script( 'es_slider',  ES_BASE_URL . 'assets/js/slider.js',['es_swipper'],'1000',false);
//    wp_enqueue_script( 'es_slider' );
//
//}