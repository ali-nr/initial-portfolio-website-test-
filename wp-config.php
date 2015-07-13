<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alirezanoori');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2)DTHR+l8-8O=!@SLVN%3*m PiyA8i|h):yBNxol?Pv<bwf;$/08;>HN/r$jU-/S');
define('SECURE_AUTH_KEY',  'G1=}qXJf{-o;e;J:!2^[Ryucee:L.zoC=d2,uu|~f>T647>niZ7|21z|T=o4-*[[');
define('LOGGED_IN_KEY',    '-e/,cJ>H6wRv*.)+_d$M4&(P,dAmyQ$eytn_,1grRt>]}Dc+!T9#q|*f(TC0Gv._');
define('NONCE_KEY',        'd<e[1fz8$tr9n8b``/0/osV-tv;M>l*Cv1kX-#Lkjn~FmANuso7vO:KmC=Vs |sY');
define('AUTH_SALT',        'x|(]/:w9+5VoFcA6WftKC-#SXM)NOeu~[pRE?=e]aoB}vv#HML+1&$-mZMG7HWbB');
define('SECURE_AUTH_SALT', 'H-tQd`/cR6#ajWgp&C-;u0&kSSu/MfU4lg&Lrq9TniVQnUU.IvLS|(,E:LL/++];');
define('LOGGED_IN_SALT',   'kCtqpR[F+nl;m$3ZYR}sZvWTvbSdtkYHyHD*I^sxJM=e<:N6=/IUR)Wqx[Gbx)mr');
define('NONCE_SALT',       '+pS*Vu|2O.?F*$t%UT$FWj+V3ZQMWF^r9^~ZLUMT@*gQ8sVs;+Bq2c`/h_pp5q:>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
