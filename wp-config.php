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
define( 'AUTH_KEY',         'R&WA%[ ?y|L637lB89U=}2!>kXi{xJTEd9Sk*)9N`7]d*vGDPy!yPA]iJvReZ#G_' );
define( 'SECURE_AUTH_KEY',  'MEt.XSf{o(g|P^jyqi;oM c>y07)0`YwiTxC4W`/K,IyLP2 o/W]Zuav>SU&`d1:' );
define( 'LOGGED_IN_KEY',    '*4JS#nI9U$@+rsf.}9+v}38F0>#2_/6}c<<!My6)mckU_EwqZhE4km9*Q8,L=WMU' );
define( 'NONCE_KEY',        'y+4XtcTXs@{QZ<t1[KBm>J({sdt8(VTnyV&yx:-JBzSd)+:)3?0/H`QNX(HXF?g^' );
define( 'AUTH_SALT',        '@9shc6#{,2Rc;L{)@FA1:sS~/{8$^= G,/%;s6[|ZfGz1JOE5n0>0_jD{FIB^v0|' );
define( 'SECURE_AUTH_SALT', 'o6kf_*pxi6a32s5m/4j;)^@#_8j[n z#|cNj:?1)._qWoo}/>_svCuh!0~x|Lb[{' );
define( 'LOGGED_IN_SALT',   'q[ZLv/Rl)&q6Ik##GbAO:3EQWOsFGH-yeH vXw4fR2qYdZ@.w%J8dnoS2[6Tw O-' );
define( 'NONCE_SALT',       '/> Bz51K{$.`8,pNt,1E%*%W&T99ucR|3 $%m|+kF?Vlm=AH.cpFY^SY1:bM%nbx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ceimairlae_';

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
