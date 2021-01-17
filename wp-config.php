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
define( 'DB_NAME', 'freegenerator4u_db' );

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
define( 'AUTH_KEY',         'Q3z9A;Usq}WsNCr)Xtu#Wu>-GGES;p;h/3jY:WkJ{vjOhpu(mSLyn34C#@8xwIZa' );
define( 'SECURE_AUTH_KEY',  '8kzLU6fl&=)8P[/x?1GF,T$4Z0$CW<F0Nw6yR Bb};H$ulOp8d16t[<O#-v9r<V;' );
define( 'LOGGED_IN_KEY',    '7jfK(v72i2Q:z0/@Rx*2 -P+O~T4N7) ObvvK1_xhX46d.UC9TuL;Gc&8aDp%&}O' );
define( 'NONCE_KEY',        '&h7:/H*kL@d_x4cK;:IY74jUgqbyE`X,7W]Kqw1fh7)tyvBTq^Uw3RRGMB}AEY7e' );
define( 'AUTH_SALT',        '`yRmwf m0_U*RNj1Yg@35?A@FRCgQ+]/>9tAQPJAEp(|4*Urxc1BtK3dK7=S}f+m' );
define( 'SECURE_AUTH_SALT', 'Z:Wf J`LJ.F2_ 02Gf95AfVJkAc&bj=+>7z;=NjVTM^K+,/:0eF)tf+5}Ia2pH+{' );
define( 'LOGGED_IN_SALT',   ';Z?t7i0$y`R>-t8e5PjHdsUHkw|s,`NdcD&KfI3g)-Lr~#C~3-Vj|IXXEC]VFP.a' );
define( 'NONCE_SALT',       'ClBF}b[zPw6R}1p@0OD9a=pP{(cT_}{M9e7T.(Z)$UE0*dP6Rn9O0*}1Da_jAS`g' );

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
