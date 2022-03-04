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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ceimairlae' );

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
define( 'AUTH_KEY',         'Hd4~wK*lpu~!^om{YJr.;m4@45akm61RKnhq-H8/i}ZZ6SeO0}@:zeG B?WNdXeb' );
define( 'SECURE_AUTH_KEY',  '1X{yl)r/tY&l)0uvz*ho==D.i-wr+a!LUGG6]%[3Bwi!Sh-GL,zNS,KPg`r&cv;Q' );
define( 'LOGGED_IN_KEY',    '*!QQDANTgb }nT4`<a}D`U,p{mtRar%*S_d .?_R@isgO?Ev&ItKfQJs=IQ7*C}v' );
define( 'NONCE_KEY',        '$|/Qi=[gc7+:>B^zxKk|n ,4$;(@rZl52!XU)]=;O0(mNL:v6R|#! $Ag-EPlor/' );
define( 'AUTH_SALT',        'byC}*`^9H/qwd@`vA*d>{e4)J4Q-l2z3 lCYE)Z*~ u<$0f~3>o)8;~Af&TO,Sj0' );
define( 'SECURE_AUTH_SALT', 'zNrsZ#H1vxT ^J5G$;O Y>g#/_?97/uY`9&R5Zr;V`Ae~R53W Gn7>iKi]+YM^(2' );
define( 'LOGGED_IN_SALT',   'fb}|@,QT27mXfMh2*##vo/WnEqHfuH*n]anv=Gd>]I;@6e]MxRP&kNOBj2#PCXZj' );
define( 'NONCE_SALT',       'O8Pv+RlDv.=7V:{XHw?WX=e_oP`1K8q^VsE5rS0TW oV aoM%33WZGv}ie=-uV)B' );

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
