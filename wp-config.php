<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'a3321611_wp');

/** MySQL database username */
define('DB_USER', 'a3321611_root');

/** MySQL database password */
define('DB_PASSWORD', 'aa865582');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '!mv|~%$>!#^<|q3L&m?W1W(xg8GH+Clhi;aZC[[:Ki>O-NvQpsQoAnZ4@6vAVH}g5');
define('SECURE_AUTH_KEY',  'aTBj@qxdOx)-n04a5B:.:Wynln0|q\U5Q1o~f.N!1fGs9vHK75OPF:IstEw7wAj9Y');
define('LOGGED_IN_KEY',    'gqZ==u$sE@CK,*#oY9<);mTZOS~Un9fDs!brRzI4x(Lu6R^5^15sYaIo\fSNsD~nG');
define('NONCE_KEY',        'isAL?9CEu2Zgj\7QO2yoD@VDd:<)W^6<d51Q/Xfnp<\YIKQ.TC<IdkfsK+%8rhI:a');
define('AUTH_SALT',        '@o?OtncT\X}i@&JlqEV]>7Uu,zi;q\,*+!K#QH6WhkA#WUBXFtk.~F7)br*4D4-c!');
define('SECURE_AUTH_SALT', 'F[^[Fj~1#5NWF(X4v:pwE]:eM+Ic[XjJ1g5T7z<cD[a7j/`1t2TrzZ_jV}XoS}(T{');
define('LOGGED_IN_SALT',   'Z.4Vyy&cdgE/}r{NwsKMeSbJ(ek<+\R:t]P4fy3eA2>>YUD3bsi3=ph{\9=}Nl>3U');
define('NONCE_SALT',       'PP2-BL_MR?D8g}Wt_kvcK*qQL*aBF1yM|5]r93`XxuQXwqF3LK0sBI(tdu5gRG?Nv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

define('FS_METHOD', 'direct');
?>