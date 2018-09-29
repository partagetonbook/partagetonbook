<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'partagetonbook');

/** MySQL database username */
define('DB_USER', 'partagetonbook');

/** MySQL database password */
define('DB_PASSWORD', 'partagetonbook');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'kcj2geeBjV,||T@Ja7H~?s..6ZPaF+jO}XPe8avHiWsPQELP2F0~y?ZlGf?Mp*{_');
 define('SECURE_AUTH_KEY',  '/8G>R!a9r-+<-Z4cstLfi,!T$%e7yy<YXchb(,xsK+@o9)LE9;D}8l7rN<B[{-Z>');
 define('LOGGED_IN_KEY',    'BUV+b3wD>*92$g*I Yg`Wmk+11B9h~4%{JHcT%bHFLrwzn_S, @-*=f|+F3gnIPe');
 define('NONCE_KEY',        'g.-%S|vxfK(qGbk#:q3,`:~rQ#zh{_o9s>cQuyUMEpIuW*9$,=&mJ7+#8J. j}99');
 define('AUTH_SALT',        'g3^zO5v7|t+{fZw14GBHva/;zu .TSQoHpX/MOh[yr_  8)HLciLjE}Mv<-t=<#w');
 define('SECURE_AUTH_SALT', 'e)c-XdBMA|5~5{j8c$PyYoRhe6Y;a-yuz6=17gF]e.el[I:j9EpTxs{MhP[ak%@v');
 define('LOGGED_IN_SALT',   ';+A4c(*Q72AAzA_6!g-_Fx*P-(iUtd&VvKIm$Mj$W,$C>O;IcYxF*IL_!So:9j=s');
 define('NONCE_SALT',       '|H9,{J)4+6G[4S7!DjnNi9e+roD8:=/c<#w!-_%I0lu65]IK)!D&r@0-=3+/VE1*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
define( 'WP_CONTENT_URL', 'http://localhost/developer/final_install/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 define('WP_DEBUG', true);

 // Si WP_DEBUG == true (en gros si je suis en train de développer)
 if (WP_DEBUG) {
 	// J'affiche les erreurs
 	define('WP_DEBUG_DISPLAY', true);
 	// Je n'active pas le fichier de debug
 	define('WP_DEBUG_LOG', true);
 	// Bloquer l'installation des plugins & des thèmes
 	define('DISALLOW_FILE_MODS', false);
 	// Désactive l'éditeur de thème en ligne.
 	define('DISALLOW_FILE_EDIT', true);
 	// Télécharger directement les plugins/thèmes/langues/maj
 	define('FS_METHOD', 'direct');
 	// Je désactive les révisions en mode debug
 	define('WP_POST_REVISIONS', false);
 // Si WP_DEBUG == false (en gros si le site est en prod)
 } else {
 	// Bloquer l'installation des plugins & des thèmes
 	define('DISALLOW_FILE_MODS', true);
 	// Désactive l'éditeur de thème en ligne.
 	define('DISALLOW_FILE_EDIT', true);
 	// Je n'affiche pas les erreurs
 	define('WP_DEBUG_DISPLAY', false);
 	// J'active le fichier de debug
 	define('WP_DEBUG_LOG', true);
 	// Je limite le nombre de révisions à 10
 	define('WP_POST_REVISIONS', '10');
 }
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
