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
define( 'DB_NAME', 'wood' );

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
define( 'AUTH_KEY',         'AZF,kfJJ$,D}feD7I%t}_twu{=*I~1Ayz[8Yru?u dMEkQ8O(d(h7rl/O%{{ ,XY' );
define( 'SECURE_AUTH_KEY',  'JVrr^@LLOH%ZKv&~X#]yHM%X?4>ugZt?^>?u7V+e76W|Gy?KEjkF.&ds~o3Qd;gF' );
define( 'LOGGED_IN_KEY',    'Mk~<JC)akLQ[E${Cl|YoEMinVhS #AvmvVi+1C^YT5n7 Nc~_kV^^Io-cu5d*DMc' );
define( 'NONCE_KEY',        '3dUdQQc;ooM`|vg=t@<V+|_;VV[rS~szXmza*!Lnn[FLRS[4~k+|GW-D8;j>)p(>' );
define( 'AUTH_SALT',        'h!JEM6ha!Dk<z@9e(i]*u7!.y^&+>DCigG *O%PEQ]<$FMMG`.9(``aJ-tb*B%(,' );
define( 'SECURE_AUTH_SALT', '#mu&<-}N_eu]xII,1=x3$4l$fDpisN`:Gi5Xn]n9Vq;HBuRom(f5QDw@M7w`QY+Q' );
define( 'LOGGED_IN_SALT',   'd#NGNRG}m0w(Nj%h}qSghL9E&,ok73z%-.VD::3(*M|Shv  nU$n9@K3AK@N1?D,' );
define( 'NONCE_SALT',       'Mj@=Ecx,%;M698:yBjPU:IFPMJ/C~Y}j7M.1#lKQ;`}+&]+YC?Aerj-;%7M^WT^3' );

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
