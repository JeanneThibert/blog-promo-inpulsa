<?php 

//=========== chargement des scripts

define('INPULSA_VERSION', '1.0.1');
function inpulsa_scripts(){

    //chargement des styles
    wp_enqueue_style( 'inpulsa_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), INPULSA_VERSION, 'all');
    wp_enqueue_style( 'inpulsa_custom', get_template_directory_uri() . '/style.css', array('inpulsa_bootstrap-core'), INPULSA_VERSION, 'all');

    //chargement des js
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), INPULSA_VERSION, true );
    wp_enqueue_script( 'inpulsa_admin_script', get_template_directory_uri() . '/js/inpulsa.js', array('jquery', 'bootstrap-js'), INPULSA_VERSION, true );

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

//enlève le générateur de version
remove_action('wp_head', 'wp_generator');

//enlève les guillemets à la française
remove_filter ('the_content', 'wptexturize');

// support du titre 
add_theme_support('title-tag');

// register custom Navigation Walker
require_once('includes/wb_bootstrap_navwalker.php');

//activer la gestion des menus
register_nav_menus( array('primary' => 'principal', 'secondary' => 'deuxième' ) );
}

add_action('after_setup_theme', 'inpulsa_setup');

//  Commande pour afficher date et catégorie

function inpulsa_give_me_meta_01($date1, $date2, $cat) {

    $chaine = 'publié le <time class="entry-date" datetime="';
    $chaine .= $date1;
    $chaine .= '">';
    $chaine .= $date2;
    $chaine .= '</time> dans la catégorie ';
    $chaine .= $cat;
    // $chaine .= ' avec les étiquettes: '. $tags;

    return $chaine;

}

function new_excerpt_more($more) {
    return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more', 21 );
    
    function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a href="'. get_permalink($post->ID) . '">Lire la suite</a>.';
    return $excerpt;
    }
    add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );
