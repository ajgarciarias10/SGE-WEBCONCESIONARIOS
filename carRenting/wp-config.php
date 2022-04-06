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
define( 'DB_NAME', 'carRenting' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '131202' );

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
define( 'AUTH_KEY',         '*cNBiE`S8|c:MCiLQy%d1S2]e)1[%#-{3j[I(6.w5]`zPd<Ddt~55^a>~5l8D<!/' );
define( 'SECURE_AUTH_KEY',  '>UI3)`3 K<@9id{[TjEX$6Gyt20Ur@b.Tcb;K /(Su-cfm&%Zfe$_y&a.u|48jdy' );
define( 'LOGGED_IN_KEY',    '(N(8q2#ko5c|@j1)T]{Qn_Ym,RWegWC>`DK,w(Cd6Ic]d<n!q@xsP;6)L9w 7 [y' );
define( 'NONCE_KEY',        '<^%@c (cpX?e!|::j6pWgC1#rN:0G`Ss1G$eR4VG.wUQ.vIjo0p}5r)p*AS=Z2z@' );
define( 'AUTH_SALT',        'k7Y:JX}FKj}Ft,d>G=|fd4-LD~tU!2}7u[2cF]T95%OFr+}U]oZdi(r2&?AiKd+8' );
define( 'SECURE_AUTH_SALT', '{|8Ec*|AwQGF.|[B{!q9DnjLy7d*F!96I;`I9(0z7Q=_v:>T07M)gr$HItUPko<l' );
define( 'LOGGED_IN_SALT',   'FE_VSSX,clAjih:g>G8),)w;0tI4g(F++p$CnPsD_Js:eVXI%Fw|3Rg(;a=k/1PC' );
define( 'NONCE_SALT',       'lLcQ`Z5.-?yX%oz2&w@4%wP)%M]@z@?{/xB~1T-0}>&<h):CGh.brEur+K+yU)$z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'carRent_';

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
