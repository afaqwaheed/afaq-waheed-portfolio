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
define( 'AUTH_KEY',          ' }_%p>Q(r&u]Q]444ElW0<0dj?nQ?ZAEhB-S:kqcDV~x-wPdIKSGZv1d15IV#xT^' );
define( 'SECURE_AUTH_KEY',   'MtSl>GJ}|1I%@ZL$vLr6/35!~Sj_@36k^Q cpa77Mv<U@b1a{f!%O48P]QW6,mks' );
define( 'LOGGED_IN_KEY',     'sxyd+u@`n2dspPUzu}~IHfbQ1LRt$YqXqwj<,+G?r8-piF$al*+_VrJLQ3n5/Y[U' );
define( 'NONCE_KEY',         ' aQ%dK y;X~T3r`5]q^c~;vNUY8Cij:4clao<SU~iAf(e){En1kxWWW$q(Rtfo):' );
define( 'AUTH_SALT',         'b4e]+8/WmA*6^8Wv+u$;VGBz%<~B}>(g|/+wrJXd6(f[;7I#fR3s69%D;545P(,a' );
define( 'SECURE_AUTH_SALT',  'eD2+A_nLdUdM]3iTp7th{+H}6~@Ql=+xc1[*?PG@sy!37C?R?R)GA(!0;/,U;~>h' );
define( 'LOGGED_IN_SALT',    '.V{6a28YMvnyP%gOkGvjH3o:}(Wq|Y$yi:?z0iYpx[ZiE< Y1s-9x<}g60]#7x)#' );
define( 'NONCE_SALT',        '!J {FKd-zv4_nU3k]W{C&_`1b+/X=ah6gy>Pu|$=xo-Qtyh+ShGE 6e[=~xnNZcs' );
define( 'WP_CACHE_KEY_SALT', 'vn!L c*-+C3/Z(;6|61%6PgGvRiv3[exY~TcqdZXdkM[[o0*mRlv@CTP,9C~-uZH' );


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
