<?php get_header(); ?>

<?php

$args_blog = array(
    'post_type' => 'post',
    'posts_per_page' => 2 
);
$req_blog = new WP_Query($args_blog);

var_dump($req_blog);
var_dump(wp_query);   die();

?>

<section>
    <div class="container">

<?php if (have_posts()): ?>

<?php  while(have_posts()): the_post(); ?>
<div class="row">
    <div class="col-12">

<?php the_excerpt(); ?>
    </div>

</div>

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

