<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Karma:400,600,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
        <!-- Pas de title car généré dynamiquement dans le fichier setup-theme.php-->
        <?php do_action( 'wp_head' ); ?>
    </head>
        <body id="accueil" >
            <main class="main">
                    <nav class="nav">
                        <nav class="nav__logo">
                            <!-- L'affichage de l'image rendu dynamique-->
                            <a href="http://localhost/developer/final_install/"><img class="nav__logo__img" src="<?php echo get_template_directory_uri() ?>/images/logo2.png" alt="logo share your book"></a>
                            <!-- Rendre le slogan Dynamique-->
                            <p class="nav__logo__text"> <?php bloginfo('description') ;?> </p>
                        </nav>
                        <ul class="nav__button">

                                <?php
                                   $current_user = wp_get_current_user();

                                   if ( is_user_logged_in() ) { ?>
                                   <p class="user">  <?php  echo 'Bonjour ' . $current_user->display_name; ?> </p> <?php
                                   }
                                   else {   ?>

                                   <p class="current-user"></p>

                                   <?php }
                               ?>

                            <!-- <li class="nav__button__inscr"><a href="#inscription" class="lien__inscr" type="button" name="button">Inscription</a></li>
                           <li class="nav__button__inscr"><a  href="#connexion" class="lien__inscr" type="button" name="button">Connexion</a></li> -->
                           <p class="button__nav">
                               <?php
                                    wp_nav_menu([
                                        'container' => '',
                                        'theme_location' => 'main',
                                        'menu_class' => 'nav__button__inscr',
                                        'menu_class' => 'menu-item-object-page'

                                    ]);
                                ?>
                            </p>

                            <div class="rechercher">
                                <?php get_search_form() ; ?>
                            </div>
                        </ul>
                    </nav>
                    <nav class="nav__link">
                        <ul class="navigation">
                            <?php
                                if ( is_user_logged_in() ) {
                                 ?>
                                    <!-- Apparition au clic du menu  déroulant apres connexion -->
                                                    <select class="espace" name="espace" onChange="location.href=''+this.options[this.selectedIndex].value">
                                                      <option class="nav__link__param" value="dons">Mes dons</option>
                                                      <option class="nav__link__param" value="http://localhost/developer/final_install/members/">Mon espace</option>
                                                      <option class="nav__link__param" value="auteurs">Mes auteurs</option>
                                                    </select>
                                <?php
                                }
                             ?>
                              <li class="navigation__li"><a href="http://localhost/developer/final_install/" class="nav__link__accueil">Accueil</a></li>
                                <li class="navigation__li"><a href=" http://localhost/developer/final_install/post/" class="nav__link__auteurs">Livres Disponibles</a></li>
                                <li class="navigation__li"><a href="  http://localhost/developer/final_install/proposer/" class="nav__link__livres">Publication</a></li>
                        </ul>
                    </nav>
                        <section class="section">
