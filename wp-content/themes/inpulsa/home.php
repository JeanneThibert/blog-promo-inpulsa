<?php
/*
Template Name: articles
*/

?>





<?php get_header(); ?>


 <div class="img_header_article container-fluid d-flex justify-content-center align-items-center m-0 p-0">
     <div class="texte">Articles de veille<br>
      technologique</div>
</div>

<form class="search-container">
    <input type="text" id="search-bar" placeholder="Recherchez un article ?">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>

<section>
       
    <div class="container">
        
    

        <?php if (have_posts()): ?>

        <?php  while(have_posts()): the_post(); ?>

        

        <?php get_template_part('content'); ?>

        <?php  endwhile; ?>
    
        <?php   else: ?>
            <div class="row">
                <div class="col-12">
            
                    <p>
                    il n'y a pas de résultats
                    </p>
                </div>
            </div>

       

            <?php  
            
            endif;
                    
            ?>
            
    </div>
</section>


<?php get_footer(); ?>



