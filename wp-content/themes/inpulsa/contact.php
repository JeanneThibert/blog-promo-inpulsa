<?php
/*
 Template Name: Contact
*/

get_header(); ?>

<div class="wallpaperheader">
  <p class="editcontacttitle d-flex justify-content-center align-items-center">Contactez-nous</p>
</div>

<div class="d-flex justify-content-center">
  <h2 class="edittitleform">Vos renseignements</h2>
</div>

<div class="container formulaire p-0">
  <div class="container-fluid">




    <div><?php echo do_shortcode("[weforms id='1552']"); ?></div>


    <div class="col-md-12">
    

    </div>

  </div>
</div>

<?php echo do_shortcode("[leaflet-map height=600px lat=47.636911 lng=6.151828 zoom=16]"); ?>
<?php echo do_shortcode("[leaflet-marker svg color='red' iconClass='fas fa-map-marker' background='red' visible]<img src='../../../gravit/acs.png' alt='online' width='300px'><a href='https://www.accesscodeschool.fr/'>Accéder au site</a><p>19 Rue de Praley, 70000 Vesoul</p><p>03 84 76 52 44</p>[/leaflet-marker]"); ?>







<?php get_footer(); ?>