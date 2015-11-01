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
define('DB_NAME', 'futengcapital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'SX#N`o]32@G0]*/arz+%IGHtc~d4a>ZQ?5J`CaOz/pBe9+<>_E&_cF(C}bxs-xHH');
define('SECURE_AUTH_KEY',  'AlcE)Uoalaln:Jm(YNj]W]e00PlAX%-9^nr+<:vUxJP9|D3x`+K.uAg0j[L&`|a:');
define('LOGGED_IN_KEY',    'oV+Scyd6LhGWX=mC[:Lx=-o#xuP?iJBTZ)A/%_i5-t#U*D2$@!6W#slGg%VnL/+4');
define('NONCE_KEY',        '|};Rs`zhDMZ|r6tmpun7F!A/rlL7G/5JF[+KW1CB=w#7:-*@=uxJGcoeQ,7TR5 x');
define('AUTH_SALT',        '6[<,0 AHeI-fsgc-_-.FwU>A-M6RcsE|=!/F{c.-Kiki5O)Y&#Wj>%mT-vmQB8^d');
define('SECURE_AUTH_SALT', '0|?J?8:wS,|dGbPshEw^L,l8ZuSL:T)g>1Zj!*B[$#|SyV/_|E.djnM_o=.r2xv5');
define('LOGGED_IN_SALT',   '<Le`yn$4F2?BJ|#9z6FQ/mcybK*m`&hfLGiosk z^WMUupg(vZ~]-gr]g&2CxciK');
define('NONCE_SALT',       '/<5TxCMF;}w[FuE& l1JTHGVk(f]4.,FSHw1W}0#|[|bA@zVxTSrOmXP)!+EKo|D');

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
