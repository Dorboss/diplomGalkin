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
define( 'DB_NAME', 'host1860288_veles' );

/** Database username */
define( 'DB_USER', 'host1860288_veles' );

/** Database password */
define( 'DB_PASSWORD', 'BzSs6DTu' );

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
define( 'AUTH_KEY',         '$CB> 1=b}YUo:tKHs3=wc)Nu3J(a8NNYAkEL-9I>d74sF;VoGq_ESpEow5aO*yzt' );
define( 'SECURE_AUTH_KEY',  '=vC;ww^I%LdE*p=*o:KC&q0L4,C7&|MCw;-Oz0%4i$?GT~0BU_dNVB*dUDLR=/]w' );
define( 'LOGGED_IN_KEY',    'jAsLc+e)y(m}Ctak*@dO u8Z6lwlaJw~,DM0bi`Cm<5.eS]!Ibx5:t{OW#>P4 j2' );
define( 'NONCE_KEY',        '(P KM!*,j<~R-YxE(p{brqLBvQAqI{yj*:,XxlT/1(M#Q.L~]a?ma,DL? I}rH9a' );
define( 'AUTH_SALT',        '?qs783Nrpxl; /+*1SZo!TWf2P4-LPazKM@eriYOGD_YfD]6#G(qDAh;9W8N~8oe' );
define( 'SECURE_AUTH_SALT', 'Z1qgl&k-`B}U `9~DP~HeS]b#{z[)5/^g$jK xR=YN 6:U2y..:s-lGj1Lz+4j3M' );
define( 'LOGGED_IN_SALT',   ' g%[$.0|l<f;d=;LKk(3f^HpI^j#EM:e}!68&,G*4/vK<ayr3G<p.2Xmw}ncA`o;' );
define( 'NONCE_SALT',       'EPks>I:87Str5eAQhilut8lS!!yKz@7b8-|()~+88Km~>3Un&=&GU4N|pdjk)L|N' );

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