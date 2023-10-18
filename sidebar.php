<nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav mx-auto">
    <?php
    // Emplacement de votre menu personnalisé (assurez-vous que cet emplacement existe)
    $menu_location = 'apical';

    // Récupère le menu par son emplacement
    $menu_items = wp_get_nav_menu_items($menu_location);

    // Parcourt les éléments du menu
    foreach ($menu_items as $item) {
        $class = '';
        if ($item->current) {
            $class = 'active';
        }
    ?>
    <li class="nav-item px-lg-4">
        <a href="<?php echo esc_url($item->url); ?>" class="nav-link text-uppercase text-expanded <?php echo esc_attr($class); ?>">
            <?php echo esc_html($item->title); ?>
        </a>
    </li>
    <?php
    }
    ?>
</ul>

<div class="div-ouverte">

			                    <?php get_search_form(); ?>
                        </div>

            
            <div class="iconespourmobile">
                <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
    <a href="../index.html"><img src="../medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil" /></a>

    
    
    <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="../medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"/></a>
    <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="../medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="" /></a>
</div>
            </div>

        </div>
    </div>
</nav>
                               
        
        
            </div>