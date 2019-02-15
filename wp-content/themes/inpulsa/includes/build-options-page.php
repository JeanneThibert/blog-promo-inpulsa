<?php

function inpulsa_build_options_page() { 
    $theme_opts = get_option('inpulsa_opts')?>
  

<div class="wrap">
    <div class="container">

        <?php if(isset($_GET['status']) && $_GET['status'] ==1){
            echo'<div class="alert alert-success">Mise à jour effectuée avec succès</div>';
        } ?>

        <div class="jumbotron">
            <h1 class="h2">Paramètre du site</h1>
        </div>
        <form id="form-inpulsa-options" class="form-horizontal" method="post" action="admin-post.php">
            <input type="hidden" name="action" value="inpulsa_save_options">
            <?php //attribut value = "fonction utilisée pour sauvegarder les options"
             //add_action('admin_post_inpulsa_save_options', 'my-function') ;
             
             wp_nonce_field('inpulsa_options_verify');?>



            <div class="col-12">
                <h1 class="h2">Image du logo en page d'accueil (haut de page)</h1>
                <div class="row">
                    <div class="col-lg-">
                        <img style="margin-bottom:20px;" id="img-preview-01" src="<?php echo $theme_opts['image_01_url']; ?>" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="col-lg-6 col-lg-offset-1">
                        <button class="btn btn-primary btn-lg btn-select-img" type="button" id="btn_img_01">Choisir une image pour le logo</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inpulsa_legend_01" class="col-sm-2 control-label">image sauvegardée</label>
                    <div class="col-sm-10">
                        <input type="text" id="inpulsa_legend_01" name="inpulsa_legend_01" value="<?php echo $theme_opts['legend_01']; ?>" style="width:100%;">
                    </div>
                </div>
            </div>

        <div class="col-12">
            <div class="form-group">
                <label for="inpulsa_legend-01" class="col-sm-12 control-label">Légende</label>
                <div class="col-sm-10">
                    <input type="text" id="inpulsa_legend_01" name="inpulsa_legend_01" value="<?php echo $theme_opts['legend_01'];?>" style="width:100%;">
                </div>
            </div>
        </div>

            <div>
                <button id="validator" type="submit" class="btn btn-success btn-lg">Mettre à jour les options </button>
            </div>
        </form>
    </div>
</div>

<?php

}


