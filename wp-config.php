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
define( 'DB_NAME', 'academia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Pa(]^pPLn(5iTSQ4$jO<pB_32yYygi*;Eq+$_ru{OoF6].dW<f6/&E`#YzeiV*N ' );
define( 'SECURE_AUTH_KEY',  'd|*nJ{DF>RhMj7>2:b|:+WiQw.vJw/2$KuMU|0QPce.bk ]qFhW!@d&{:3cG{lj/' );
define( 'LOGGED_IN_KEY',    'm4-U:e{jS**3b*u+9|+YBi;!=0/OkbD=1dZd/gL74^[Zkx6GJ},QMH/:.RQgF@{z' );
define( 'NONCE_KEY',        '6qA1^~<?n$j{>3|V^dTo,LZf<wOk92lsXbw_:X@2I[/G{K-KS7ci-/mB G>mO_|%' );
define( 'AUTH_SALT',        'zf7Wcj, ?S7%N$a~0 @HvuKa[/!INdo8:$~rE}}x$7viK 5mM692.}xjri~$3HdC' );
define( 'SECURE_AUTH_SALT', 'xPi(0:(awyT6=doZP,IsXzN9{^Cq76]cxi@hSEO.fKTzD&7fFy(^wd1^9u@IiFzk' );
define( 'LOGGED_IN_SALT',   '^pQVs Uz.lzVo_XtUfGUsykZx{4{5 3)TQ:~o015ml#:P}ja]7dIu`C}.-|cST<Q' );
define( 'NONCE_SALT',       '~P$gkn7s+m153(&;,`>xyRSIUJN4{NB4/dQ&F1y)O$o(;J#kh$/1KA~q|k%ZaSaD' );

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
