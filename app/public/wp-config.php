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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2/fTHJoyCBAiEFthBP3d+mbMUmaukSZfkhrbFkQLrXXZvtQT+tVmnTc6GLvC3bC+f8ChT0dl7RwDjQQICJNkIw==');
define('SECURE_AUTH_KEY',  'krk2L1AESm+ceDYVc3tVC8FxPgS7BHD8p/ovUGgqUOQjJkatUNBVTTQTn/mrNv6BS7QxIu6RFG+3uLz/zC9JUA==');
define('LOGGED_IN_KEY',    'DNT2YOzkMLzTz/CkWVuzpCGVCqTmgCm6yTOdCF3fkR/+l+TDWK0E4ogeUHsGIBZx9CdLx4fXsv1L/ZiBmwGBqw==');
define('NONCE_KEY',        'HJeRk20cJfXy79CXPPjrzolinLMEFFNxrDt6gBriKtxaHdIMvoORrifjUwRIzOmRlQ3jyJi/YMwJM/lx0IRtjw==');
define('AUTH_SALT',        'PHr+hLClVK8rd8jz3/BjoLEF3iAS9D1OPFvkvZ52bhijP0fdpJjcQjfNsu3UZwPaf4k7tgSSRSP2giscr6H/uA==');
define('SECURE_AUTH_SALT', 'UFu4TJIre+vCzvoFXstjscoFmBuL15N6Yn2XStfr4zaFjSrOmoRMyJ9zph5fQtrBrcimcYBU6FKhYfhfsEj7og==');
define('LOGGED_IN_SALT',   'cBJnNT6cjR6TU1c/u79q53Wyp6JgqSqetvrJ5IvucqB6GY4SCdNb7939TqMM/Fmd5EDbLRyeaDUEw2GmN+CJeQ==');
define('NONCE_SALT',       'QRc/lp0U3+gmPzQOJtyCwLUwPWmBWR2KG58+9l6O3avG/gH9rKWUhxHADJDXx1zgnlFCPGITs3S86A6sRd7uFA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
