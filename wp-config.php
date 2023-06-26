<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '<wordpress>' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iSQRwUVOpTYQW,Wr+=d1!1}*d.xZ?p!fj+[xa6lw7kD~u_!`=#P1| =v7ehEK3E,');
define('SECURE_AUTH_KEY',  'y./43;U;?Xe|W&tkUf|`4I$f+!:1]`?Hb6jO+;FH6o/{YO#|a~]RRKN.50#Yw4BI');
define('LOGGED_IN_KEY',    'A-!tM %qO,<_9JeS9j:j-IK.ud,9[@B1v,2x^R4Fw96Dq-v18`%pVb(2/T0K$xpH');
define('NONCE_KEY',        'tRAXrO|dla+as&e6,B|C|yfduJ.7+{rO%o{l(D)#9DO[+Ul6xPfl-J_KD33$:q~Y');
define('AUTH_SALT',        'J0rT@bK::D[8qSc-_z-PXL%+d0.;X {I.Yw<Wf#P17Z&0%Im=wCo?$i<kdKXfskq');
define('SECURE_AUTH_SALT', '&!L3a-D:jiq?w+MNp/S>jcU[pmd/2e#?AV+:2$_|iGb|mJ@_?^lx55UFa!|6^I$Z');
define('LOGGED_IN_SALT',   '59X0xD S6N`:zMgI]Y<?Mqya {|.Qek+N;j-l!dx Vjw/=]UzDqt]*ZSb;^b9+v$');
define('NONCE_SALT',       'jwEvNn>Xp{1O8i$h4s%`/LA&`!?DqkPuBDw.->!sX$[28iK{ofx2PbV:=|T= e0g');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
