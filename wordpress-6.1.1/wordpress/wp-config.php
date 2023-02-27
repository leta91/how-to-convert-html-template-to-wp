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
define( 'DB_NAME', 'hamlet_database' );

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
define( 'AUTH_KEY',         'w8H9fkh*2;^1f!K_y@k4h`r%hH/k3Z1IgQnp)Y$wUT#h5-#x2|&^8ct8]G>b8ofD' );
define( 'SECURE_AUTH_KEY',  'Oh3Oap4A8%e+M)sCnq(xMh+?Pk?>$jPQ6JN?`mub,,e]|((+TlSCk~[4|eA.cRF4' );
define( 'LOGGED_IN_KEY',    'KjjH/+4YPA~P#O]eYN.:=,5>IxU@VaaoXTwzO#M%n`1AN3NsYr 5Z+3:{A Z Zw5' );
define( 'NONCE_KEY',        'B$,8Q:P|t+hzl}9_>Gb.E0$TetGwq>{b<L{$d=Il=nLi,.t$h;oB:zyEvpb}T}*p' );
define( 'AUTH_SALT',        '=w}RZ=./=>wq},&{;OFLZrpY~_wH&ss*=G9^*5~cCgjLLn;~qRj#as.(1NI,[n:h' );
define( 'SECURE_AUTH_SALT', '-Bj{~CwAWlGa$YC!X=7t9xxZzE7k|L5+ta8:<D0+?*0[RndO*g_}^G`_,~ae5fEP' );
define( 'LOGGED_IN_SALT',   'fqXjEk u[9W/^bm,/a==+<BxrB!EoRmObBV6U$^NR@`?)V9kj-uJCPz?vXYZ^dvr' );
define( 'NONCE_SALT',       'w4@e/t@}v,h ^@kr_o4A{%n6JSrwE:}B79?6VDKIZtQO,Vjfj=D!_`ip ,:|D:Br' );

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
