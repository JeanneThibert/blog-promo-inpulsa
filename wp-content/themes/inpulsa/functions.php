<?php 
//=========== chargement des scripts

define('INPULSA_VERSION', '1.0.3');
function inpulsa_scripts(){
    //chargement des styles
    wp_enqueue_style( 'inpulsa_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), INPULSA_VERSION, 'all');
    wp_enqueue_style( 'inpulsa_custom', get_template_directory_uri() . '/style.css', array('inpulsa_bootstrap-core'), INPULSA_VERSION, 'all');
    //chargement des js
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), INPULSA_VERSION, true );
    wp_enqueue_script( 'parallax-min-js', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), INPULSA_VERSION, true );
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.js', array('jquery'), INPULSA_VERSION, true );

    // wp_enqueue_script( 'inpulsa_admin_script', get_template_directory_uri() . '/js/leaflet.js', array('jquery', 'bootstrap-js'), INPULSA_VERSION, true );
    wp_enqueue_script( 'inpulsa_admin_script', get_template_directory_uri() . '/js/inpulsa.js', array('jquery', 'bootstrap-js', 'parallax-min-js', 'parallax-js'), INPULSA_VERSION, true );

    
}
add_action('wp_enqueue_scripts', 'inpulsa_scripts');
function inpulsa_include_custom_jquery() {
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'inpulsa_include_custom_jquery');

function inpulsa_include_custom_jquery_11() {
	wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'inpulsa_include_custom_jquery_11');
//google font
function add_google_fonts() {
 
wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css?family=Proza+Libre|Quicksand|Amita', false );}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
// font awesome
function wpb_load_fa() {
 
    wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false );}
     
    add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

// ADD FANCYBOX SCRIPT

function add_fancybox_script() {
        wp_enqueue_script ('fancybox-script', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array(), '3.3.5', true);     
        
    }
add_action ('wp_enqueue_scripts', 'add_fancybox_script');
// ENQUEUE CSS FANCYBOX
function fancy_styles() {
        wp_enqueue_style( 'fancybox-style','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css' );
   
};
add_action( 'wp_enqueue_scripts', 'fancy_styles' );

// Parallax Effect

// function add_parallax_script(){
//     wp_enqueue_script ('parallax-script', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js' , array(), '1.4.2', true);
// }
// add_action ('wp_enqueue_scripts', 'add_parallax_script');


// chargement de l'admin
function inpulsa_admin_init(){
// *******************action 1
    function inpulsa_admin_scripts(){
        if(!isset($_GET['page']) || $_GET['page'] != "inpulsa_theme_opts"){
            return;
        }
    // chargement des styles admin 
        wp_enqueue_style( 'bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), INPULSA_VERSION );
   
     // chargement des scripts admin
    wp_enqueue_media();
    wp_enqueue_script( 'inpulsa-admin-init' , get_template_directory_uri() . '/js/admin-options.js',
    array() , INPULSA_VERSION, true);
     }// fin de inpulsa_scripts
    add_action('admin_enqueue_scripts', 'inpulsa_admin_scripts');
// ********************action2
    include('includes/save-options-page.php');
    add_action('admin_post_inpulsa_save_options' , 'inpulsa_save_options');
} // fin de inpulsa_admin_init
    add_action('admin_init', 'inpulsa_admin_init');
// activation des options
function inpulsa_activ_options(){
    $theme_opts = get_option('inpulsa_opts');
    if(!$theme_opts){
        $opts = array(
            'image_01_url'             =>'',
            'legend_01'                =>''
        );
        add_option('inpulsa_opts' , $opts);
    }
}
add_action('after_switch_theme' , 'inpulsa_activ_options');
// *********************MENU OPTIONS DU THEME
function inpulsa_admin_menus(){
    add_menu_page(
        'Inpulsa Options',
        'Options du thème',
        'publish_pages',
        'inpulsa_theme_opts',
        'inpulsa_build_options_page'
    );
    include('includes/build-options-page.php'); //contient la fonction inpulsa_build_options_page
}
add_action('admin_menu' , 'inpulsa_admin_menus');
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

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projets', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les projets'),
		'view_item'           => __( 'Voir les Projets'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le projet'),
		'update_item'         => __( 'Modifier le projet'),
		'search_items'        => __( 'Rechercher un projet'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Projets'),
		'description'         => __( 'Tous sur les projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projets'),
	);
	
	// On enregistre notre custom post type qu'on nomme ici "projets" et ses arguments
	register_post_type( 'projets', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
