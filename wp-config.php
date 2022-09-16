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
define( 'DB_NAME', 'fortest' );

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
define( 'AUTH_KEY',         ']66GgFqCcF}&BG+[U_WmAz1g&$r6>JMimUG=,a1+95,z6/r`;2ridi=[>4!#jjgb' );
define( 'SECURE_AUTH_KEY',  ']nPorXL`J7t@1UT }eY.`%/@kSCA0*#d+DfT937o//#0?m?/2aw7l?4Mc~k5Sk(E' );
define( 'LOGGED_IN_KEY',    '~s60k7Sr1ImOGJvmR2x:6MG*|wAwpR>/gji:iBv&]O+#ZP/@7iEDX.OetU^QZNhy' );
define( 'NONCE_KEY',        'ff|V({npK9kQ0-#w={&.Wm[ ,:jplQ{{F!QS0EE,Addb:b_?x_Q$vi`W>2s!.g[n' );
define( 'AUTH_SALT',        'Wk6UX/G4>?82J&/u:3q$B=V,MdOa62Mi |^6l-TPF?R(0_+r7{Z*XFsC A||hk?N' );
define( 'SECURE_AUTH_SALT', 'o&0T(SSG5!W:o7q2VYt}45[nvl!@en2CF_d/)J}UmTgy6s=`&(.9m&Pq8953ulb<' );
define( 'LOGGED_IN_SALT',   's !l+];uQw1>{ :xw3?{h&? -+:~I/-64x!c{T$zd 6T_S3X2db)DTyO+tns7@4<' );
define( 'NONCE_SALT',       'USsdWi[6473)?zPPE<wDR@Mue<qmzdi}Du_O?a!y2QX[pQ=fazq~nb5Y8S<p{C_W' );

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
