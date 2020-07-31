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
define( 'DB_NAME', 'my_portfolio' );

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
define( 'AUTH_KEY',         'rpnVXPV16<-u2qg8zOOe#w#[DN^&o>A&0Qq.Ai< 3/$_$(FoiubINj{+=-a9Cu]$' );
define( 'SECURE_AUTH_KEY',  '42o%#(<7Z6oh7hBYGMsCP/x1@AW]55PLtKG-!mp1C |cu@<$8Y}q&wi@23`) wKY' );
define( 'LOGGED_IN_KEY',    '91(2S&9Ag0D]dlCaZ:2@VrBMgLMbYlTdTnn|*: >9<|+97n?0Gk*@6d7YE`:abxU' );
define( 'NONCE_KEY',        'J3[_TvKuOkgkaP4F6RpoKe:<:1{Aiqlvp=$^Fdm^OlHi@<-1p@c#Qxx37([+CUol' );
define( 'AUTH_SALT',        'AI|b T|UZnU]&b6[;Pzzl&`67^ZbiBbrj$r:r7?i`$K1:IH^)$IrB3Qu?={HNCb1' );
define( 'SECURE_AUTH_SALT', ';.RcJ<qL1@0N9d|-CLvA};`|96Mt0V rG|>[X_&OA>s?o.,-91|v~r$W0I~y(N-w' );
define( 'LOGGED_IN_SALT',   '0;oj%Z]dcCzuHq4mst,?wCK.f~Eu_D){I[%/6P4[De|A1PP|Oi>ad*}({:YRr0hf' );
define( 'NONCE_SALT',       'OjVUAjiqwQuo(c&~e^7L;oysLP#sw6{!ZO*Mt7DB%V.7^YKN6%kE1< ( P-4Hij.' );

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
