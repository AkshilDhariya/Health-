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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4KECa`G}ocubGKaXlN}vSl+YM0ev<Vh&,wI9Wils++w~kdT+&9^+2`iUOxpiW #c');
define('SECURE_AUTH_KEY',  'Oh I42^PiIF4vyRibS<h#2I:WK|K-qBup,E0qxp_/1.pU)kTF!NU{mE=NQ]0hA;p');
define('LOGGED_IN_KEY',    'o&>w]y{^X h,{:+=4BiA2(m?(&@ovi!Y<yawe)siwT^|{H-^_I+Zw;3iBR%d|`%J');
define('NONCE_KEY',        '|$<0.pp/_lYDhI=_tmrzxnM@(zG8^BT9|lZ7hRi7Bb`l<x_(PVWKEqI!2hwe!=ml');
define('AUTH_SALT',        '#EaLCwx$c^K$xVyvoDg@^}KH:v3Zgtq1;4<Ffos/?ku$(=.no/{@|^ge~~#s;{P?');
define('SECURE_AUTH_SALT', '1{y$/Bv4b{WJ{&])}z8F0]hNsZI+Qa_K5/2v*yX}He-p; ?JSa^vW_RKg7_oe%DL');
define('LOGGED_IN_SALT',   'o4%*]0};^0(v:6QPq :~9vjOWeytvkZ&5M$v}i`|OY$0# -(>{#kzZV;hgd4dn7q');
define('NONCE_SALT',       'l2_+x=)$M!DQz1s7rU}J6c%SO;H%DO(/-9^v+KT6jB}NrzayZ^kp-(i6~nwld`c`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
