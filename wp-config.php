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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_floristnepal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'DY.uI`Mn,`5xhGyT3+Ob[}H2j+>+*T?dwU6%#fq6Cp#8K;!JWZmPh3p#c?VyfRe/' );
define( 'SECURE_AUTH_KEY',  'T}%%qmu^H8$9gN>@Q;L6rTVLzQAA7M}`:(sRQvxL5Qnb>M%qRVFwS~Mw~,t]3A.H' );
define( 'LOGGED_IN_KEY',    'Zh2^hv>}U@nIoqI&j//BoUi0[@K0NtEYNb/M>vjYtDCN#qQU4iuNl07K +d5_x%X' );
define( 'NONCE_KEY',        'XrTs#^7i> 0t eVW>q3cPmE^by4m%[IL &S#]S0=#+@{{>tsgTh%$33;;]Kod}uI' );
define( 'AUTH_SALT',        'i2rA*0V1YnfaVfz(;qNE04?5NP;q>GJ?3=[m{ib32Uj3@.tT7q,#VE/MKfy)b?z9' );
define( 'SECURE_AUTH_SALT', '6]hqW[xs{}bR,.1rNU}isM:;dJ(`_*LZLPD+Yc$nEO%Yctp(S7>Qt/kIB#|_w2xH' );
define( 'LOGGED_IN_SALT',   'm7_w%|J^59/fsM}OVYm4GM@yA8AN#<4wjA|iaN-BDFNq[LS!AJ$*d;DN;yLmP^AC' );
define( 'NONCE_SALT',       'w$%|Ro[)gF!PTXo>#M!Y^9s6m>DGXxF}+g?0RY.6oqUt[6M;)/oE-~SaIjdP?{B(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
