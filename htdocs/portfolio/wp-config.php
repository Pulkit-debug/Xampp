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
define( 'AUTH_KEY',         'i$o:;toQJK=%MJp9V]hTSg:mY0#JY5Og)k4t[ckctsMFZ S=S^866hh68w:kVU^*' );
define( 'SECURE_AUTH_KEY',  'BK3g!wv!C=Kt5 Kg[+@$?a0rreyl?4BkB1_yi;_|KER]a;x$y~5t0KKG~_|e`.}P' );
define( 'LOGGED_IN_KEY',    '])W#YVCoD$%y$F4*)W`EFD OkC^z4k_XuUTY5I_)D^OpfV*lZ^jarA,072-aJbtt' );
define( 'NONCE_KEY',        '1PzKu{0[!$A-F}Xj?^JH0y.H1v#zLVm5lD$2&)HbKOf1$nhQJTBEr%I3+Bf6kKfJ' );
define( 'AUTH_SALT',        'cx_y!{]TSD{NTbhX<-E`*u&iL-38pJNO;~WxuQ^[ Njq>)$LvgUr5~X7h|9gw4%/' );
define( 'SECURE_AUTH_SALT', ']S+G)=DBwdgI1B(I=^A4p/NZC]?W-n,[uU%+s[p(*x&FTyUPXbh<6w2xfLNcMp.d' );
define( 'LOGGED_IN_SALT',   'rU19|ctrC*{ehQG5);&Nv#%dj0B}u!#}DR3~nW=CHL*8x~s$E!oo&}@neNr M0$S' );
define( 'NONCE_SALT',       'Z%Yu<fOV4eS1*3j?g`I$=(A6_fL`-6mH+6K-PZ<cE$ehfZZ1F37U{7MzzV<qmjHd' );

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
