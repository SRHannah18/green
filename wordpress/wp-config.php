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


// BreakPoint for testing out if statement for server************************************************************
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// if ($_SERVER['SERVER_NAME'] === "http://sethhannah.com"){

// 	define('DB_NAME', 'sethhann_green');

// 	/** MySQL database username */
// 	define('DB_USER', 'sethhann');

// 	/** MySQL database password */
// 	define('DB_PASSWORD', 'Konstantine11!');

// 	/** MySQL hostname */
// 	define('DB_HOST', 'localhost');

// 	* Database Charset to use in creating database tables. 
// 	define('DB_CHARSET', 'utf8');

// 	/** The Database Collate type. Don't change this if in doubt. */
// 	define('DB_COLLATE', '');

// 	define('WP_HOME', 'http://sethhannah.com');
// 	define('WP_SITEURL', 'http://sethhannah.com') 


// }
// else{

// 	echo 'test';

// 	exit;

// 	// ** MySQL settings - You can get this info from your web host ** //
// 	/** The name of the database for WordPress */
// 	define('DB_NAME', 'wordpress');

// 	/** MySQL database username */
// 	define('DB_USER', 'root');

// 	/** MySQL database password */
// 	define('DB_PASSWORD', 'root');

// 	/** MySQL hostname */
// 	define('DB_HOST', 'localhost');

// 	/** Database Charset to use in creating database tables. */
// 	define('DB_CHARSET', 'utf8');

// 	/** The Database Collate type. Don't change this if in doubt. */
// 	define('DB_COLLATE', '');

// }
if ( $_SERVER['SERVER_NAME'] === 'sethhannah.com'){
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'green');

	/** MySQL database username */
	define('DB_USER', 'sethhann');

	/** MySQL database password */
	define('DB_PASSWORD', 'Konstantine11!');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

}else{

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'wordpress');

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
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');