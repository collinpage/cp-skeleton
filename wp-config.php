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
 
 // Load DB settings from confs/database.ini
$ini_file = dirname(__FILE__) . '/confs/database.ini';

if (!is_file($ini_file)) {
    die('Please create a database configuration in confs/database.ini');
}
$database = parse_ini_file($ini_file);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $database['name']);

/** MySQL database username */
define('DB_USER', $database['user']);

/** MySQL database password */
define('DB_PASSWORD', $database['pass']);

/** MySQL hostname */
define('DB_HOST', $database['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Deactivate theme and plugin editing through admin */
define( 'DISALLOW_FILE_EDIT', true );

/** Deactivate updates and possibility to add plugins through admin */
/*define('DISALLOW_FILE_MODS', true);*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rjT:D($v8C4H @3Fd|,|[m?0BTtc6!js*cU$C#|k#9wU6(E`_fVdwfo^MbhYSIXX');
define('SECURE_AUTH_KEY',  '?>R=h6E%?/r,&:M.H :f7U(U8O0K<nrke+mBdFlgW$Glz. QDWhZarFVN!U5lxym');
define('LOGGED_IN_KEY',    'zqhMLp#^L#Qina(T!ojUF8.H7Y!xSGeIu_+[<)N;e(vO}u>uN@[NI9H(pn2pe`!}');
define('NONCE_KEY',        ': Q(kUZEj6#O bW+`v$d!C1Q`G!1lyLq(TM0:/gr9j(C2,LZM^~xD>$<UM!5z|10');
define('AUTH_SALT',        ':E[4`5_6+gEjd`Lq!o=P)K#p!_j`EE:.x4 Bm0QA1`+1MVc$D_bV)puh6S.m_=Y}');
define('SECURE_AUTH_SALT', 'dM!22i]_mZ#vxBQ.Yb,B2{w~fBk1E4G`wqDUZb0VS>.vFTh`(Bn;cS0[VA|p8nO ');
define('LOGGED_IN_SALT',   ']08z+=:yt|Z_Bgi0^P>VIc:G]rew>=x@N2uHWMK(+R7usR(/&hG~7WA}8xhQp ,[');
define('NONCE_SALT',       'WWuhXYXMEt/qY#EGTS,[C/^1f!XnEno.t0v4:#}VGDT,4Nbbh;H*.u4VP??XKis`');

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
