<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ce site est le blog de la promo 23 inpulsa Team L'ACS de Vesoul">
    <?php wp_head(); ?>


</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                    </li>
                </ul>
            </div>-->


            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>



        </nav>
    </header>
    <div class="container">
        <div class="jumbotron">
            <h1>Hello bienvenue sur sur le blog</h1>
        </div>
    </div>

      
    

    <section>
        <div class="container">

    <?php if (have_posts()): ?>

    <?php  while(have_posts()): the_post(); ?>


        <div class="row">
            <div class="mb-5 col-2">
               <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <div class="mb-5 col-10">
                <h1> <?php the_title(); ?> </h1>
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
  
    <?php wp_footer(); ?>
</body>
</html>