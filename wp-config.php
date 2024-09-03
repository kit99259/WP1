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
define( 'AUTH_KEY',          '08Cf/DQ?NzkfoMIxb.P-=l4<lki!7Db)(#-ERpi)2lmc4ma));%uc&;d&Tp~5#$p' );
define( 'SECURE_AUTH_KEY',   'K=p:[I+?9(l,xk_5N/X(Fs)-X2uPy]^0&emY`X7j.WVe`HMW=HNN6&wsMv;Py@]d' );
define( 'LOGGED_IN_KEY',     'H,e5O_A3# b-tV}*9%NRQX`y>(|H$8-hj(G$+F4}+46x0{^dHGO]1VY3z[;Oj&>l' );
define( 'NONCE_KEY',         'aS#+~;o8|Y|R~1*,g_9mo$vItt(H{Gn4|I3XA@%T,v7{{oxrhxZ*i$Spe^1&)3{k' );
define( 'AUTH_SALT',         'S.#Fi)g_cW+0U%B2qMKH-P2tDUBgmT4EP3o76TOK-G?Uxpx(&>l;eB^QP*i$K|AW' );
define( 'SECURE_AUTH_SALT',  'Gs4NXno)&[:wE}BcT&w0n`IG(SkZ|g/jxZU?Jo`2qY=/1v2SZh6#1rwK}y,MCT+w' );
define( 'LOGGED_IN_SALT',    'CM|X{pls4ieLQ,Y%=s%M]Yb<:b}le0<5/2mQF4?Z1]?,`-H5&1(82(,,LX;]nrqK' );
define( 'NONCE_SALT',        'c857mO|(z>0Vg~ $2<IsE8/C~Yec@d(bGF .Q83r1.xD0gh;inRCDWNQWE6dPtS!' );
define( 'WP_CACHE_KEY_SALT', 'yjr~X$N2wg!WU}#+1rN%XODq%4e,)YAmNDh<Es(Pn;VC8;+zu!}$q nPl2Y:C|WZ' );


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
