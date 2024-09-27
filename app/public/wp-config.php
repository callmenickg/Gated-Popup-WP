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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '/y>|hJVAdBC Q2}LCt&*n}iY2IH|}NMB.]:PFdH*TuS*Oa87UrEPrT_6:.46<?9I' );
define( 'SECURE_AUTH_KEY',   'Yi3pY##Pq}u>O/V3P`WHl$ybPws)81(PiNq,L+0A9H%i<$3B^?#b1yYt+pbK]PQ_' );
define( 'LOGGED_IN_KEY',     '|i3^(0t|YS:+?8oM/Y5zja@Q8!NV(WOF)|!O=sFho,f+l>>^2`oIU5afKqu(bO2g' );
define( 'NONCE_KEY',         'SO}Z&R{<]@HOYL:^VoPqIRPl;EqU$=[F`vF_W^..;UMS/f9E/DmOa6g|mogw`=*d' );
define( 'AUTH_SALT',         '$]b1[6dWz2Sf*I6vv.UHrt{)@<`=_+=I$+A[$8q^nfEKr_so)R6+9[b3-[U<uUnN' );
define( 'SECURE_AUTH_SALT',  'J$#/C}}=.eX cj,bx(]>.h(dUX9JZLqm{5TbG5Aj?+-:+_,:o0+%l<coIH~~Yl`E' );
define( 'LOGGED_IN_SALT',    'KWyhWD*]^)V-x_KngW3rKx>EgZI5}Dc;#D5q+~@Gg(i4j&Afr/E-B*K]P9s6iZ-M' );
define( 'NONCE_SALT',        'pD_/wiU<^@1jEDMP(Tg{[b JhS#v:/tie`|*4z0sRut9oVyO9!8Y{gpawlMrKRDH' );
define( 'WP_CACHE_KEY_SALT', 'TD{T(etJ]u*|WL{=,`l4S=wUJx}ee*l_f [j7j]$x:n<O%jy|Zmp]C|zDAfb<UER' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
