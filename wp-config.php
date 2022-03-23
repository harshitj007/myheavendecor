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
define( 'DB_NAME', 'heavendecorwordpress_db' );

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
define( 'AUTH_KEY',         'R!C|i2#?A;9vZM<K$=>adT6_:2ux9w1@@0@CA~S)s:c<o0*lUtT1*:Vl%FIkOHX@' );
define( 'SECURE_AUTH_KEY',  '^xkGg8UXs%m{<t-QhTb7OZLUnM (ajm-uV@~L_j:E^i|fBWojtg?F&FP@d+(]uMC' );
define( 'LOGGED_IN_KEY',    '[zd{}K5Qtag{/^S12dnkP: ~I~%?erpfoQ~RH}([RReiMObeal(CDy[KS>9~g<G=' );
define( 'NONCE_KEY',        ':oUc:LyIUKx:/C%wmQzwG:07SLRubhx-Gt OLk?1p^:xwfdx `RS~4:dxN d5!m9' );
define( 'AUTH_SALT',        'x:FMM?cSI~C%O?aPs2-+Ou*tulI},$SWD_3F%4Hq#4DZfc|.aK<sEGX-QA<N#KHC' );
define( 'SECURE_AUTH_SALT', '$HPX9 `BlP}{;twb72IfComD.-DFkHc86&K0K(2p?#{2OL|mboasaDD{i,+^}}Q4' );
define( 'LOGGED_IN_SALT',   'R7+i{H!3.G7*+|M.W(f.Psd2@ntV,;56y{+-EM^?)*dP1d_>98U[sJl:f>ML{~qk' );
define( 'NONCE_SALT',       ':^>ZHNF$bS9,8GnqXe#f7m=tWh)S>uw Guug.u2NEDzfCi#4wa.son8~0W[K/b#n' );

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
