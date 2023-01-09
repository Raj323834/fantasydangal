<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', 'u120488023_fantasydangal' );

/** MySQL database username */
define( 'DB_USER', 'u120488023_fantasydangal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ivG3q2qPG7&' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'loo28hdcy5oqdl0goxn0sqbukqgmpytobzx8o58pq72fqabibavohlfbw2ko0hag' );
define( 'SECURE_AUTH_KEY',  'ood826skcurfbfbdiyg4vtifuigjholyid1olyaxn1xvbqjlx2zreoc8q1cgh7zk' );
define( 'LOGGED_IN_KEY',    'y6kfsser4arinbrqs67hvdj37wckwly6iykruthevzqx7hd2rnvc5dhazont8kpz' );
define( 'NONCE_KEY',        'ns1txswiqurvg8rj5nwqz5dugdbq9jkg0m9zv5iz9cdpoujslsygxbbojqcnjdk2' );
define( 'AUTH_SALT',        'u94s8fdaofn0qqplqfv0eujnncvsncpy9uwcld7ovmjbep4f4ln1lzimwa7zcpj0' );
define( 'SECURE_AUTH_SALT', 'hj6hyblbz9vsspjtxet4kbmgju8d7yrjrek8jz2ditjsvf7ds70rqs7qx4nu89w4' );
define( 'LOGGED_IN_SALT',   'gpfopza7dssmqrvhuo9p2wj86jhhh7webzpn8kaqzmep2ecxdpin2ubdcksxjucs' );
define( 'NONCE_SALT',       'hqof4fcvfv2hvmze2tpalfbpshht2gowkomclcnf4okrsji1ej7hgll5sql1bu4h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvv_';

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
define( 'WP_DEBUG',false);
#define( 'WP_DEBUG_LOG', true );
define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define(‘FS_METHOD’,’direct’);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
