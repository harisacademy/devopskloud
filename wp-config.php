<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '.iy#H{3w9R350@DaFtLp9Lg&oHG9T!QJs0W3+6-OcWaB,Ys yQ)n4[`hW*(? 63~' );
define( 'SECURE_AUTH_KEY',  '+H7xAn$P?J,>O7Ct*1n`r5KTyMz89MEHdj/eoxho]7#>4U4Cp}k,ifdW<flW,x*S' );
define( 'LOGGED_IN_KEY',    'C?N.65r k_B) D_R$!0$y-)/!DpIv:rGL6K405E758__R~5a1:fRZJM#e%8mY6Qb' );
define( 'NONCE_KEY',        '+v{6j{^{2+mn<#8Bj4oFlj@x$^)!kGf=~na|;S<AXubWPFk@Z#nNQ62hcbWSwOf#' );
define( 'AUTH_SALT',        '>M~^LF_C0yX_>g2I0:0]c9`eHWaq6ah[Y:cDt(4zb/7,$M=DnO>i?m=lX/}c5E^X' );
define( 'SECURE_AUTH_SALT', 'Y6>i`4{`MX|~/7bXOHA[]lYEA,j!nSRC0cSYsQLz*g32m)wrpK,8$>ebS:Y@?UPI' );
define( 'LOGGED_IN_SALT',   'Pp@nc}vI?8<23[h>?s@kx !@suQj8p;q2G(H m-RS`N}NLEV=Vh*]kQfL)p!~;{<' );
define( 'NONCE_SALT',       '`vu1U.pjkkvN49z=)`aQ;tmK@(K|2O!27;CYZtWvrWzyx`:G|vFs)5c!x;Nb!K%C' );

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

define('WP_HOME','http://3.223.49.103');
define('WP_SITEURL','http://3.223.49.103');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
