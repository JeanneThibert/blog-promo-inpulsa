<?php 

//=========== chargement des scripts

define('INPULSA_VERSION', '1.0.1');
function inpulsa_scripts(){
    //chargement des styles
    wp_enqueue_style( 'inpulsa_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), INPULSA_VERSION, 'all');

    wp_enqueue_style( 'inpulsa_custom', get_template_directory_uri() . '/style.css', array('inpulsa_bootstrap-core'), INPULSA_VERSION, 'all');
    //chargement des js
    wp_enqueue_script( 'inpulsa_admin_script', get_template_directory_uri() . '/js/inpulsa.js', array('jquery'), INPULSA_VERSION, true );

}

add_action('wp_enqueue_scripts', 'inpulsa_scripts');


// chargement de l'admin
function inpulsa_admin_scripts(){

    wp_enqueue_style( 'bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), INPULSA_VERSION );
}

add_action('admin_init', 'inpulsa_admin_scripts');


// utilitaires

function inpulsa_setup() {

// support des vignettes
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'inpulsa_setup');
