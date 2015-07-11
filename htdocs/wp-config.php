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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f1a42dd423');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '192c7fc15c6e4e98bd88e24b7f1d2dd0c565f85526af7509e9d528557dd0dcf9');
define('SECURE_AUTH_KEY',  '86d98991645a1cef28d9757ff5729acda28ed6cbdb7fa8c2de33aba1d7de2df2');
define('LOGGED_IN_KEY',    '1f11841d807242988a7cdbeebe1a8a373f3fa352431efea93e5040e29acc7104');
define('NONCE_KEY',        '3a65fe797e2aa6f88dc2f2203cc7a99d9b07c7a382b286101dd64cb9e12728ee');
define('AUTH_SALT',        'e93a884233ef9c69267cbed12957ee692a5b5bebeb83aa86d237749fc0217ef5');
define('SECURE_AUTH_SALT', 'af436b40aeaeb1233e34affaf1cb1bd130cd20f150a2dfc49150b4b7c1d0dfb7');
define('LOGGED_IN_SALT',   '7a20b585d80167d439f3a98012ee8d2a09306c9e107bbd8ba662c1b34d815e39');
define('NONCE_SALT',       '94a5c0e1d029efdd1658961f9f4f6b8387a65ad1451300956564395c801dc6de');

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'F:/XAMPP/apps/wordpress/tmp');

