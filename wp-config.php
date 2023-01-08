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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

@ini_set( 'upload_max_filesize' , '400M' );
@ini_set( 'post_max_size', '400M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_web' );

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
define( 'AUTH_KEY',         '!s.{1,*:EQ:5YXv&MY@!>=5W6Y98vm.}TJ2pm_=wK2CtJ1=o- V2$g<3c&NIOCaE' );
define( 'SECURE_AUTH_KEY',  '-`@bINODhpR2OJ8=67&T_rCeq2iPC$-/Oy-#ZSyYK02Kp/g|D`tRv8>ATH#lmYm2' );
define( 'LOGGED_IN_KEY',    'EQJTc1@X+%euZb*z_wY)y]d`6Q/+e3(l+|/*_4UsH,m ztCkhDpA0wk,[%Yy~KXR' );
define( 'NONCE_KEY',        'osF-aPN{(=zY.hlaC>i@(:V+9AnMV%6,tg>P(L~1(ukzZ O{ufDoN]2qUYAFG(h)' );
define( 'AUTH_SALT',        '|eii(?RwD02];x&vIDi=!=M@SE+R$#+<*fhKe2+f-]Y5WA~-|JwHjsQ }m-5%dTc' );
define( 'SECURE_AUTH_SALT', 'ZVH75VzXIE,|_B4u0)&%Oy+6_|R9 >bj}_@E;O}|,C|tl~]2jS[X}(IW>^V?hLu+' );
define( 'LOGGED_IN_SALT',   '|P|5M!f?anYhi8_z,(#gWgELUtgh:1QM!P.b7s$pzTQY}gH&NY*z(Q=6V`FWX&rV' );
define( 'NONCE_SALT',       'yF5+t+-2=MbZ-czPxg4*sl;mcKplW[n6iIo}?&,mIw=!#rz%~_p0eYKJQkmqVWxM' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
