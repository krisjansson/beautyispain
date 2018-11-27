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
define('DB_NAME', 'beautybygreen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'N=9T.Lvi_MV),e!y7_OX_2]>)!P*g!.EIxY8FvG@=0m*$:+1h5C+I@~<=}.(Q}EX');
define('SECURE_AUTH_KEY',  '#NSj*|||#T+D;r5f^:V~6O!+ ?(s6:pr]<;>{uOE#?t(1~+RXH1!YZL9!11MpXU=');
define('LOGGED_IN_KEY',    'b3Hu5NK/`IEKqitac;H|<-_G9Ojfmnge)Cf$/seW{59J<n>w=q$X-M5EB{Z:V<t3');
define('NONCE_KEY',        ')<v7u57W0#yWA3J}/**0mf5mG(*,(vC&Oxq2iFt_g3]j]S-kjLrdT@,LD.H0A;(]');
define('AUTH_SALT',        'dZ|QfTx2+2n3}^{4biK O+uP(z4sOT+X9O7A:&5t[`clYf]A?{x[7{gLj|K*ee|l');
define('SECURE_AUTH_SALT', 'i$-J-AKBBCZ5[(xAC~jjjzu@EQZ&3lR2w[^ez _-KwgNhXobC6a*=9~eBVkL>^l@');
define('LOGGED_IN_SALT',   'E: M(7H|:auIQ,:PyJ8^G~35a?UIsT|]-d>Av&`7aVn]4N+c_}^v=DmeO V}.)%|');
define('NONCE_SALT',       'u_k+Q;a/99$%f0dH,5sF-O|(<}W1ntaK}WK&&/i~=0k6Q^)Ln$X84boo070b%jrx');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_';

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
