<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ce site est le blog de la promo 23 inpulsa Team L'ACS de Vesoul">

    <?php if (is_home()): ?>
        <meta name ="description" content="Le site présente la page des articles du blog " />
<?php endif; ?>
    <?php if(is_front_page()): ?>
    <meta name="description" content="Le site présente la page d'accueil statique" />
<?php endif; ?>
    <?php if(is_page()  &&!is_front_page()): ?>
    <meta name="description" content="Le site présente un contenu de type page " />
<?php endif; ?>
    <?php if(is_category()): ?>
    <meta name="description" content="Liste des articles pour la catégorie [<?php echo single_cat_title('',false); ?>] "/>
<?php endif; ?>
    <?php if(is_tag()): ?>
    <meta name="description" content="Liste des articles reliés avec l'étiquette [<?php echo single_tag_title('',false); ?>] " />
<?php endif; ?>
    <?php wp_head(); ?>


</head>
<body>
    <header >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


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
        <div class="time-lapse"> </div>

    </header>
/**
* A placer dans le contenu de la page car image donc différente selon les pages 
*/
    <div class="container">
        <div class="jumbotron">
            <h1>Hello bienvenue sur sur le blog</h1>
        </div>
    </div>