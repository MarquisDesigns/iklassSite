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
define('DB_NAME', 'iklass');

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
define('AUTH_KEY',         'YnNwG0|y1~!Ce$GP*?)0ifjcF&v_].>oiWyz0RcfY~qzumt!G~ d:VXYMl=xx4B@');
define('SECURE_AUTH_KEY',  ',C$gj/Mwdx/xp<Om:feB-bHkAMnEq&4e`1((zg!8`>65h+&(=B,a5]Y1tp}W(o 5');
define('LOGGED_IN_KEY',    '.KtP.Go]:@.Sk+xfmn:zwo0|1~|#>!&~HPt3 z@X#?*YuFULA`d!)]vix588N|$]');
define('NONCE_KEY',        ') c]o6a?#DS>LP};juKlC&wK$h^*.2wdvIpM25}-V^AIf5BV)CfE:!L+t>367wz%');
define('AUTH_SALT',        'A.EfS+C0VPVs-cQI}2c6G2$O=Zx%.C=upk2W26DBn;1@kHML32b Pf~`g(<@l!H}');
define('SECURE_AUTH_SALT', '^ !M,U@~|w,O/iYqie:xoLog]^i5L*&o=?Tq]ke!tEc)~=61jg#C>P)s;T)Cytw>');
define('LOGGED_IN_SALT',   'gub$(maitYOQoI`fOJI lJaZ=*.l^&M,LM|t6r}ZvJ7?dtC9B?Cx=sUL8>GY<{4)');
define('NONCE_SALT',       'K)bBC9gJq^0HrX9R:Sx&g0vXY;]p%u/yn_LI3q(0?F55*]aOc9u4w4r*WA~YV:@t');

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
