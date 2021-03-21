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
define('AUTH_KEY',         'cNiB7j/JBaOdKv0PLs58GY1k4xCU0jzzYGu5QH9da2NObP54FdXmwW2NAidJGWTyY2Mw5APLsHzvMJDLkYQY3Q==');
define('SECURE_AUTH_KEY',  'lFiHm4pD5rULYO/ZKyZm72MZhWW1DkXbKPN0NtzFYQM4yhHSSfGfG8vTGTZCkWu+VGwO3MQB5nrZxnNjb4EZTA==');
define('LOGGED_IN_KEY',    'HGzPdDKuysQE4VJ37AiMUIC44QWGCVZwYhhq+vkBZJYGDkcrnh1EzGtLSUPb1w0lnqXFNZRdiqWrdIBTg6HBDg==');
define('NONCE_KEY',        'qI3AaTENk2roS22lmGmyKW0ngdz2NFvqEPJXYC/rzmhf8FDTPokjdbVkUXMMMizhrV4sHTUJ9Tj5iZrcSs89vA==');
define('AUTH_SALT',        'dUSfW0DcyqfvJGlWNphzMfGBYbDAoDyixOm00henxoT7ehkPI2/qm2t5PTclB1GdtrvfRs6/wcRM1Igf86Ileg==');
define('SECURE_AUTH_SALT', 'HZTpYtwEfQ2/jGqkkUCUKfG1AjWzcGOGexpGWPwp8BAu6ePz3R19j8tIpvSqj4s3rGr4lS3LBFyZL3ZRbWltoQ==');
define('LOGGED_IN_SALT',   'G36soyT3wl8lWQXNaKO8u8abQhMMjhv1EwWQ/re2TWBuSnliGzJHKk50fTbZk++JmLqSx9bmC1YCsCwzyTDUhQ==');
define('NONCE_SALT',       'wFFamg4zCzsYiJaZ62p3mkngSUZC0DLU/yaEsSmm3j4Jez5ZI3Olewgxz4kUXplwcuZo5KvuQNw29mF9VIITlA==');

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
