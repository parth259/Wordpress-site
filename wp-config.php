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
define( 'DB_NAME', 'Wordpress-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
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
define( 'AUTH_KEY',         'UuT7fwAiGbaLYlYCUBHkDDGrmA7syfAz8ASKIKzVEwXZkarBhUhAKjsY1PY1vHQX' );
define( 'SECURE_AUTH_KEY',  'BRqQss7jc1xQZY9r0iEzUDzWVLjnDTODJBOdT1dfpVUv7ubD1mFntmesPrpbC6e7' );
define( 'LOGGED_IN_KEY',    'ezhrS6WVBu8KtaQ1uav6STiJaGY9O9IgvDmEhntk0COS3iaqQ9LdoGDeabBLm3RZ' );
define( 'NONCE_KEY',        'WWOa62sW7iuQuN2OJRsl9UbeIRb4TMWk8Ei7sD8DU2LoNDUrzB018JpI1M3Wsqg8' );
define( 'AUTH_SALT',        'gTbjgUQbGeIRUOR7ZGtZloRQCM2y4twUYmkTyGCmIz9lTgaS44wi62XhK3RUihoP' );
define( 'SECURE_AUTH_SALT', 'T0XarfEwNJSP314DKz3k1Cp2c5EQKcMJYVnQA84iyHH1axcuUZmlbWooWCSM1mnO' );
define( 'LOGGED_IN_SALT',   'jBlwO5zoxDhCMFBNlCI6DIQdAoP6fvmu571bSY9omkDEvs6hc1G5Tk12paz9ToFp' );
define( 'NONCE_SALT',       'XR8mZpnJE9qATRMk8vhriWpoaFsnWeCj5F58UpzkbscjMJ7T3Ww7Yfr9BKA1AtFo' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
