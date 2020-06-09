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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1');

/** MySQL database username */
define( 'DB_USER', 'wordpress1');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress1');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '03d0a2958550005a60dfc94c59b2e3576b916826');
define( 'SECURE_AUTH_KEY',  '0b63464fceb7a0705579fe09949c4e1050c4ea1b');
define( 'LOGGED_IN_KEY',    '5b4bf866fc18648eaf0805b745a632c59921f335');
define( 'NONCE_KEY',        'f6fe568d8d0f57335d14643a77a473187a476220');
define( 'AUTH_SALT',        'a9c9c4d9d5387e4a8fd0cf9ed18175db22fdf629');
define( 'SECURE_AUTH_SALT', 'e9cf3fcc1d95e0c911bfd9881de6f9737cdc5d56');
define( 'LOGGED_IN_SALT',   'b15dc3168b4b1ef69c80066ca03d3bb3638de0a8');
define( 'NONCE_SALT',       'da0d3847bc43a0a175c95823ac515922fb956404');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
