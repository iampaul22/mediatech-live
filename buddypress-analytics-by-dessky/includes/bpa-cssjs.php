<?php

function bpa_load_assets($page){
    add_action('admin_print_styles-'  . $page, 'bpa_admin_styles');
    add_action('admin_print_scripts-' . $page, 'bpa_admin_scripts');
}

function bpa_admin_styles(){
    wp_enqueue_style('bpa_admin_css');
}

function bpa_admin_scripts(){
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('chart_js');
    wp_enqueue_script('bpa_admin_js');
    wp_enqueue_script('bpa_js_flot');
    wp_enqueue_script('bpa_sticky');
}

add_action( 'admin_init', 'bpa_admin_init' );
function bpa_admin_init(){
    wp_register_style ('bpa_admin_css',   BPA_URL . '/css/admin-styles.css' );
    wp_register_script('chart_js',    BPA_URL . '/js/chart.js', array() );
    wp_register_script('bpa_admin_js',    BPA_URL . '/js/admin-scripts.js', array('jquery', 'jquery-ui-datepicker') );
    wp_register_script('bpa_js_flot',     BPA_URL . '/js/jquery.flot.min.js', array('jquery') );
    wp_register_script('bpa_sticky',     BPA_URL . '/js/jquery.sticky.min.js', array('jquery') );
}

?>