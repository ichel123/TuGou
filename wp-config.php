<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tugou' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f4:BwAxV4/r&<3d[rH#UJr`5LTM;]!Tua.i66DM/yN<D!%f:pk7Rzto.PnXrZ[4*' );
define( 'SECURE_AUTH_KEY',  'G1}/STN<[fcNV$~WNU-,/`^o>X5 q+OPECnLM]U4+Nf^>W,RCa!gk$*~{tvQ3[4A' );
define( 'LOGGED_IN_KEY',    '{A[%Jh&^#&5w_Lj#Ve)Xi}XQ1w35; ?z}|)2#Waq( !?$VJ>`Ln#L]TzT[ 1p2z*' );
define( 'NONCE_KEY',        'bLF%?&2$fzG7`Vh:%S%MyrvdM=t IL<][Ue[Ct28XU`tX[Q_j=??Ocd-<B[Kq*8d' );
define( 'AUTH_SALT',        'V~ux1BJz18#LM(cuQqu1V^@:/d:>VGvAx.udxu4YEN|]Ar>h`TR,D$ b8C.8k9D4' );
define( 'SECURE_AUTH_SALT', 'NBJo,mm0eq3JPTk3c#1W|z3!Exd{=A}q g^<f#i<=>a339su1;l(W1D/DdXZ%g9y' );
define( 'LOGGED_IN_SALT',   '6MyI]6E,siZELS%A[@s2,0,^*`5S9Q5dj@Wj|rL!|%C%+9|qkG~C7mubxS^%D0(Z' );
define( 'NONCE_SALT',       '9X1z*fxNP2-T[lxLrkb}.&^*bm@ALf&C9_%2qz]$2$Vj7al)^oXf-LZ#S1 tJ-Z$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
