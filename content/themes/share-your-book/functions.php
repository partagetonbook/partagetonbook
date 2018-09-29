<?php

if (! defined('SHAREYOURBOOK_THEME_VERSION')) {
    define( 'SHAREYOURBOOK_THEME_VERSION', '0.1.0' );
}

// configuration du thème
require get_theme_file_path( 'inc/setup-theme.php' );
// ajoute nos fichiers CSS et JS
require get_theme_file_path('inc/enqueue.php');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
