<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if (strstr($_SERVER['SERVER_NAME'], 'i4profit.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );

} else {
	define( 'DB_NAME', 'i4profit' );
define( 'DB_USER', 'i6568015_wp1' );
define( 'DB_PASSWORD', 'i6568015_wp1' );
define( 'DB_HOST', 'localhost' );
}
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'g+M0fOLQkdmbFGEY6fgUCuUdW5rULVmY0kBZRb3Ej/3srptuaxVdXwiLnHVXKiF6XCPcBxQwIkCI3NVIfI8+1g==');
define('SECURE_AUTH_KEY',  'DYitZyH2FT08oP/tjxSAluyXJfCXAT7CTi/iz7LAz/SKMRkfwRpA6RvPsweywC820fdFUU+LoFFP1D99PVQngg==');
define('LOGGED_IN_KEY',    'DIjGNn2pLiKcIoSwRl2U8DQ7X1U0KBm/jpYAld1FQvZA2wxCFe/2PDBdbE/AOv9Pe8qrMsYm82DtU7R78R+j4Q==');
define('NONCE_KEY',        'Jx+hDDJCIKmCKViNqw3+A5kMTBeXb810/DM2m/k0NyGFNmLpXJAZsyHsFzyx9DFIxTpqkP9KWujjRagg0gxAAQ==');
define('AUTH_SALT',        'VhvhB0Xmv42XgUDAmROxt/FRnsqRP9VvACjnwGPI9XTE2sv7IWUhRmpyXOW9QJJMBthHD8nKhChLCAf9ymlc5A==');
define('SECURE_AUTH_SALT', 'TAv6+okxavgBcYhUQUGu0/vf9TTJ+aJtYM/ya07ZK+Xix1l5E+gB2ZROphBTvRqE68/AIWaDV7uBSh9ws1xc2w==');
define('LOGGED_IN_SALT',   'ojFxNrSA+L1ur3y9BPDRrzbPjEIMZbSukA8yIcieHerT3lMLt0di9krYdFZBdCS5ys9h1zk1yyRZGMzBvA73Qw==');
define('NONCE_SALT',       '43AbDKtkKwID20jiMMEtSbUZk8cGdD7kRLq05PdspiTfOzmxepiOR8nj0D6ERIrxlSWecBj4YONf3TRzEd8dGw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
