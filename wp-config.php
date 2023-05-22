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
define( 'DB_NAME', 'university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '16101998' );

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
define( 'AUTH_KEY',         '{HF@|@nSbhlGw5<M{x^#]lS!w{~h { Y7akQwujDsW+:_[3?=[z(J5U4Z*tdDru{' );
define( 'SECURE_AUTH_KEY',  '4.uFtZ;u_%H66UM3DA5C#nt|p{>~wazP`]_01QrMuP<pjrk)qM69Y<X=A SLTK)p' );
define( 'LOGGED_IN_KEY',    'e=9Efhz~k:olZ[DjdD|`vi0#+t9h-$BH[;;wR|hoWC/j2fZ(xIU&Gb1Z:?VC=p;K' );
define( 'NONCE_KEY',        'Q^M5^y?wjRXUa/`Mn>c([ cok^sR9JewZfyNiw~#oAJb`p}HtH|GWPtW CFml,o^' );
define( 'AUTH_SALT',        'L,3h&&tt8^@Ke;W}u<HqIbX4OgPw#V9nb2sM]}8bl0tD;=3$s!@x+IsM-xo7.Ry{' );
define( 'SECURE_AUTH_SALT', 'B_Z}QT0_n$BL;_*dOR}:9j.2=1}yT_~k9?V9XL.2Ti_xnK{%@G8LPFB*boKIiz0v' );
define( 'LOGGED_IN_SALT',   '^o)|6]Id|*EFn);IGt1x.8KE[MkaKQ7yB^Q4s2CS.:m k2H}DxFMVTfxR<W%Wa10' );
define( 'NONCE_SALT',       'zz(^~)VBHJ(Y_kQUfNswT Jq<rTkGrOTH7Xh{7SLZMM%Ta>Wye|}zGOyfPKD0 1B' );

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
