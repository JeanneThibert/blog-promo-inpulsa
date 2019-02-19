<?php
/*
 Template Name: Contact
*/

get_header(); ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

<div class="wallpaperheader"><p class="editcontacttitle d-flex justify-content-center align-items-center">Contactez-nous</p></div>

<div class="d-flex justify-content-center"><h2 class="edittitleform">Vos renseignements</h2></div>

<div class="container formulaire p-0">
  <div class="container-fluid">

    <div class="col-md-12">
      <form method="post" action="submit.php">
        <ul class="contact-form p-0">
          <li class="size-form">
            <div class="">
              <input name="name" placeholder="Prénom" required="required" size="8" type="text">
            </div>

            <div class="">
              <input name="email" placeholder="Email" required="required" size="8" type="email">
            </div>
          </li>


          <li>

            <div class="col-md-12">
              <textarea class="span12" name="details" placeholder="Message" required="required"></textarea>
            </div>
          </li>

          <li>
            <div class="d-flex justify-content-center">
              <button type="submit">Envoyer <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
            </div>
          </li>


        </ul>
      </form>
    </div>

  </div>
</div>


<div id="map"></div>







<?php get_footer(); ?>

<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
   
<script type="text/javascript" src="contact.js"></script>

