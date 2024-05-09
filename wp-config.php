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
define( 'DB_NAME', 'wordpress_custom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z35^DSnyi9-~V.Mb2f(7_USo(67v/Ox|(-epd8A!Dn]f@!iTKMi3WZf/ML:0nfR]' );
define( 'SECURE_AUTH_KEY',  '?y5~o{symRCl(#]<;@:S;a~P.@LikC={*uyNz;P5 S& ^t,XK 45R}SRFe9VJ^?s' );
define( 'LOGGED_IN_KEY',    'V|u`awJirtF/5?2sjC[i!yjhRMz}eP4)8>-lD,~eSB4,~PY1Sm&oE7?@>qF@SM<x' );
define( 'NONCE_KEY',        '>,?`(sI.nQU@{;SZ=d5iv6*2`C[hc&l&z99Pn&^eFu?X~GtNRa%@7vmDESK4;^[A' );
define( 'AUTH_SALT',        'Iu!`[;sr^-B|d%J|6nnws3TkS>z5I<x})(=Av6ZYnmT/<RcrW-aL+3zA}#i;Ek&T' );
define( 'SECURE_AUTH_SALT', 'LQ#$$iy{r0N`q^49YU6!rRe*Qkrox0pdW{{jX)PSa*;!Z})f::g*P(:CTk3{b2-K' );
define( 'LOGGED_IN_SALT',   'uJFM~Dx40[^}t?R#fj#TFXd`27g?MCOAL,o*|`5U8]@/j7*[I$x8,H51V!7=M.r)' );
define( 'NONCE_SALT',       'jM~M{uuC.DVrqm^9>l[WZD^zIxt<AX=%(,(5hr9mW*M9m.]NX3sP6:}XY+-DAWJg' );

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
