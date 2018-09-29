<?php

if (! function_exists( 'shareYourBook_setup' )) {

	function shareYourBook_setup() {

        // Permet de de prendre en compte les title tag
		add_theme_support('title-tag');

        // Permet de faire apparaître la fonctionnalité "mise en avant de l'image"

		add_theme_support( 'post-thumbnails' );

        // function permettant d'afficher le menu dans la tableau de bord Wp
        register_nav_menus([
      	'main' => 'menu principal du theme',
        'navigation' => 'Menu de navigation'
            ]);
	}
}
add_action( 'after_setup_theme', 'shareYourBook_setup');
