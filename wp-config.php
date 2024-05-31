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
define( 'DB_NAME', 'temp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';vP?2N-FP8!y3u/|76mbU sr`+Yzf09,Zhy==CWLz84pN9:Vu ._>{BP1Wa^qA_w' );
define( 'SECURE_AUTH_KEY',  'nm$$t7g0yGKwxXa_tHd8 pa<{xpAw}uJwvsPr/bE@E4Rlk*]3lx4D_bQ[Od9O,_q' );
define( 'LOGGED_IN_KEY',    'X~5O%b(:auF.RTu|>!ub3?;+ui9UwQ>CmZ/9d&-99W)/,t`y+Btg.}uyYZ,;#7-q' );
define( 'NONCE_KEY',        'V5,JVEAC0SNjr5*s*fAvMO#R1WRqX40{/eDVnV@t&]e@d1em<pn1CkSI[:_$$-4r' );
define( 'AUTH_SALT',        'q$K|bUx*;2H08yR`lV@%e@K=K J;A*[x~l?XU]?:phDu];eZOgN;&0pdtB${oI4:' );
define( 'SECURE_AUTH_SALT', 'Hlh#;E:_ppk%#|]Or|SE9 L#ogl_%Lb8M8[DEPWriG)q+2G8woaFLKH]Cs.CM;tl' );
define( 'LOGGED_IN_SALT',   '7%2}{i7uB(b=a3mZAx^]U)fCY-]vw#mH(fc=K:>P<Q!:JeHJz~qnC~*t8z>@=<A|' );
define( 'NONCE_SALT',       'fx$wR_zZD*c@LgZpc!a0J5LF-&-y~#GSMX_%3t)4us=UwNWg;TR?fTl+4yMnSy5:' );

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
