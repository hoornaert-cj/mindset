<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'X^y|PS,p9fD#=oG?rFTWaRbT)QE9;)}Dw*k`b%q^Ul&i$p+6sj-vt=GPe}~rRc{!');
define('SECURE_AUTH_KEY',  'HaFjuklHk&;_708gJXC$dF.hXLQgql@0tG3 nD v;W9g]Tx<TfJe+jV=_X+]E)Z6');
define('LOGGED_IN_KEY',    'eV/solXWc)Yexw-Odznn3sW~kD^buXD#MUkY#|!5k2x2kS/8Sv2L?V]8[nwZgw_U');
define('NONCE_KEY',        '6R#u]P@9o|RjsDA+LuOHG<D <W~#T%:}9>_6lN3uj8Xk7iQ _id}+&@S6y_Opa= ');
define('AUTH_SALT',        'cFO,B:D?<ro|=i HAtu~R}+$k$h^+k:a]|W^5(G#It<M.ZGzdq]_x|u]ii$-NeAJ');
define('SECURE_AUTH_SALT', '|hXhd_?-s%N?RhnQDT>AM7V|K)8/1@yI|TW%G+->+[ pE<=eTLkTTw[W3N3&lu]Y');
define('LOGGED_IN_SALT',   'd7Pn%s C7{<;63DEAm&]uZ54+[rWIt}Q[_)Mxm_Gytr}kzPtx|Nv)nr/BB,6ZHN&');
define('NONCE_SALT',       'OLlWr?->)m)Z)Y#f9X%z2J^n0 4htU<;S?UrW/e<Go868>;=).Y/c,mX~$diTtCP');

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
