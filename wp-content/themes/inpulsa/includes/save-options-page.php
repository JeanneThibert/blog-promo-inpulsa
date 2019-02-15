<?php
function inpulsa_save_options(){

    if(!current_user_can('publish_pages')){
        wp_die('Vous n\'êtes pas autorisé à éffectuer cette opération');

    }
    check_admin_referer('inpulsa_options_verify');
    $opts = get_option('inpulsa_opts');

    // sauvegarde légende 
    $opts['legend_01'] = sanitize_text_field($_POST["inpulsa_legend_01"]);

    update_option('inpulsa_opts' , $opts);

    wp_redirect(admin_url('admin.php?page=inpulsa_theme_opts&status=1'));
    exit;
    
} //fin fonction inpulsa_save_options

