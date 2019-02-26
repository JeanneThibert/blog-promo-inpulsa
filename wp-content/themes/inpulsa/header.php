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
        <nav class="navbar mt-5 fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="../../../gravit/logo-blanc.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNav',
                'menu_class'      => 'navbar-nav d-flex flex-column justify-content-center align-items-center pb-3',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>



</nav>
<div class="time-lapse"> </div>

</header>

<header class="d-flex justify-content-center align-items-center">
    <nav class="container-fluid nav-pc d-flex justify-content-center align-items-center">
        <a href="http://localhost:8080/lequipe" class="liens">Membres</a>
        <a href="http://localhost:8080/lequipe#galerie" class="liens">Galerie</a>
        <a href="http://localhost:8080/"><img src="../../../gravit/logo-blanc.png" alt="logo"></a>
        <a href="articles" class="liens">Articles</a>
        <a href="contact" class="liens">Contact</a>
    </nav>
</header>

<!--
-->