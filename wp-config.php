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
define( 'AUTH_KEY',         'y=oQz{+Q)y1?[h ,m@SI-~n?q57x=@5{?9-Y)K!D<,jt#gT3;_$O_+L,yQJ~?R]2' );
define( 'SECURE_AUTH_KEY',  'dJ;}=rH[W2>tM: !(r2,Cgea3o^TZ4+Q>Pj@hVL1Gk;7ahQdA)`)6NH<kO7~tku1' );
define( 'LOGGED_IN_KEY',    'v^?jFw dlJ@7J{ OEB1!Ux_[JL[(Jf6ZXhR6nC= =o]=-D<L1_a;Tal55r`Ch][b' );
define( 'NONCE_KEY',        'H_h4H[Ebniw.-S5J]T-/HZs9IG4|%L26@Z7g&}3*}-$-epuS,0okYn[D_b=OP8oK' );
define( 'AUTH_SALT',        ':.z#VgiX)2a_A?|)OIQzd}3*Qvkn<9rw]ra4Qw, 0.y`QH[:( HxP,@i4(R]s@RD' );
define( 'SECURE_AUTH_SALT', 'VPZpvt,u*<INkO=u>K$OJ7%N`M?`}h&l>yE 7rG7R g}CC4t<7PsodFS*77]i3%=' );
define( 'LOGGED_IN_SALT',   'Bz3ZfBpe?Sdht{hKdXhSHI*MKO-n +.5q0R)H`#*&!{K4oZ#2VlRY8f8A]p+q&11' );
define( 'NONCE_SALT',       'k9T!}>G,8|QoBVDqd.p]*[7~OyZ`8z>ES)[w-@Lsf9</Cho.^YNjMH~r5q@gOLzr' );

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
