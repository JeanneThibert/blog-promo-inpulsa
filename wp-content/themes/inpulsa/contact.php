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

    <div class="container-fluid">
    <div class="container d-flex flex-column p-5 justify-content-center align-items-center"><?php echo do_shortcode("[weforms id='1552']"); ?></div>
    </div>

<?php echo do_shortcode("[leaflet-map height=600px lat=47.636911 lng=6.151828 zoom=16]"); ?>
<?php echo do_shortcode("[leaflet-marker svg color='red' iconClass='fas fa-map-marker' background='red' visible]<img src='../../../gravit/acs.png' alt='online' width='200px'><div class='d-flex justify-content-center'><img class='d-flex align-items-left pr-2'src='../../../gravit/adress.svg'><p class='edittxtpopup'>19 Rue de Praley, 70000 Vesoul</p></div><div class='d-flex justify-content-center'><img class='d-flex align-items-left pr-2' src='../../../gravit/phone.svg'><p class='edittxtpopup'>03 84 76 52 44</p></div><div class='linkacs'><a class='linkacssize' href='https://www.accesscodeschool.fr/'>Accéder au site</a></div>[/leaflet-marker]"); ?>







<?php get_footer(); ?>