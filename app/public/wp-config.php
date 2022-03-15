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
define('AUTH_KEY',         'POgdzKmBNAE3g07DoK22HnrK+q4evX3eQQ3edMX8RueDrARAXwVcPY23T6VBlNPDKhds0NfGFhfyzVIS2gN5yw==');
define('SECURE_AUTH_KEY',  'tUuSAr6WJqexlNS9AAV03iGoDMSrD13sz0V4TtVVmMYxqUw/6Dw15iJzhamF0bYUSJlBn4wF9io/CBOpbMTwsg==');
define('LOGGED_IN_KEY',    'P+AmAjhO0I3yJhMxaX+kSpTdP7qpEzAGW82CBon7SgK+KVP3ZPCiiKtHbFPS0U3kdhZIwCffwFDuUPtNW/cWSQ==');
define('NONCE_KEY',        'kACrTa/gxhbic9gJDc8qfK91quPF4X2YI3jyoANuHD2RdEj8EqsDf3eylRNfstlIPfeV7tgwS2n/OEOaCyfgBg==');
define('AUTH_SALT',        'm4oZGrusNtWaD6uRb1Wy2zGTnKEVivFvB1d7LYKiIyI1i5EArQgpZOjMCyf8bdWm660NoG6VisLhVfvSNYAj4g==');
define('SECURE_AUTH_SALT', 'KE3UAts4Eb3TTu/t7ISFcJKebrSkuMdh724Z3j2kZTMva2vDvSHarkexmgDudxG8yZ6mskpM/E7EIe9x/2Asag==');
define('LOGGED_IN_SALT',   'XGUBWRUKdo6JcuQvLBZlp/B/tFi20nnCKM1ByDm9fnWsFbc/WWNpKWAWQGJhfgJ5rRP9ICU/A8D1mdwoxqgUqw==');
define('NONCE_SALT',       '1aCf75Fg57R4P3T2KBNl+vMtqUVEARa6PLwdleKtFtLjPINBtErCdCvULmKG/hXuUKm1KBQLGmi3ABzi+T2OJA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
