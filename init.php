<?php
/**
 * Plugin Name: Elementor Slider
 * Author: Saiful Islam
 * Version: 1.0.0
 * Description: This is a Test plugin just. Just for testing Plugin.
 */



if ( !defined( 'ABSPATH' ) ) {
    die();
}

if ( !defined( 'ES_VERSION' ) ) {
    define( 'ES_VERSION', '1.0.0');
}
if( !defined( 'ES_CAPABILITY' ) ){
    $es_capability = apply_filters( 'es_menu_capability', 'manage_medilac' );
    define( 'ES_CAPABILITY', $es_capability );
}

if ( !defined( 'ES_NAME' ) ) {
    define( 'ES_NAME', 'Medilac Core');
}

if ( !defined( 'ES_BASE_NAME' ) ) {
    define( 'ES_BASE_NAME', plugin_basename( __FILE__ ) );
}

if ( !defined( 'ES_MENU_SLUG' ) ) {
    define( 'ES_MENU_SLUG', 'elementor-slider' );
}
if ( !defined( 'ES_META_NAME' ) ) {
    define( 'ES_META_NAME', 'es_data' );
}


if( !defined( 'ES_PLUGIN' ) ){
    define( 'ES_PLUGIN', 'elementor-slider/init.php' );
}


if ( !defined( 'ES_BASE_URL' ) ) {
    define( "ES_BASE_URL", plugins_url() . '/'. plugin_basename( dirname( __FILE__ ) ) . '/' );
}

if ( !defined( 'ES_BASE_DIR' ) ) {
    define( "ES_BASE_DIR", str_replace( '\\', '/', dirname( __FILE__ ) ) . '/' );
}

if ( !defined( 'ES_ELEMENTOR_BASE_URL' ) ) {
    define( "ES_ELEMENTOR_BASE_URL", ES_BASE_URL . 'elementor/' );
}

if ( !defined( 'ES_ELEMENTOR_BASE_DIR' ) ) {
    define( "ES_ELEMENTOR_BASE_DIR", ES_BASE_DIR . 'elementor/' );
}

include ES_BASE_DIR . 'elementor.php';
include ES_BASE_DIR . 'enqueue.php';




add_shortcode( 'Elementor_Slider', 'es_html_slider');
function es_html_slider( $atts ){
    ob_start();
    ?>
<div class="saiful">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div> 
</div>
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script>   
    <?php
    return ob_get_clean();
}