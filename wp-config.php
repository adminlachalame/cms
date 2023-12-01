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
define( 'DB_NAME', 'chuyendecms' );

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
define( 'AUTH_KEY',         'ghvy))ytinG%32k(B5[i;$~[xD,+6X~g>ms65eOx2..6g38,xPp:~<ESgK,ohu:x' );
define( 'SECURE_AUTH_KEY',  'K7k&$o8>IB,Y,a&INcs$TSoI-(;_(Tg=uXhtPmAsZ,[UlDbah+pj,!)@iu;QX0uP' );
define( 'LOGGED_IN_KEY',    'HjuDaoJHbJv`LR9dbs$J:JQ(hZlz-pex6jn7B[}dKYUGS#G))i]6-GG<:D7yx<9M' );
define( 'NONCE_KEY',        'v<p5d3X_3jU hBB9F^>7|Gw3/%|A7W=b)3(U3^QE),exJu_R.:47K(Vz*e=AV|*q' );
define( 'AUTH_SALT',        'Mzr{?@mN?H2Q@=03dvpUdV|,b,&l06+hW()Kc=|vd,MuKk OhC0=]/;,fCiwe!mO' );
define( 'SECURE_AUTH_SALT', 'V:2D@s9e+Of1D~|Y5Ir?l-(saB:!G3z>$<ap F ;,&vW}x1Dc8&3FUqXiwY-Yq<d' );
define( 'LOGGED_IN_SALT',   'N1HNd[Otx5`?zDvPx<);+Fbi^~nh[Qns*k>i}jNDp~RA?iQQkeppEL%BF:-W,,]u' );
define( 'NONCE_SALT',       '&}dM%Y#nzx[EUl-_NgM=,KF0|I70nhW+H!Uc3->59cZlP<9&5f;c{R}@xV&G)R&v' );

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
