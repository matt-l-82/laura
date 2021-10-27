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
define('AUTH_KEY',         '2SjxHlERkKt/Qv68sjYVJWpS6AoNge4JxySj0wDguhQdAJTsb7t+wRXMXcfxY4Ray8XF4RjTcBPfzzKhG3ZPPA==');
define('SECURE_AUTH_KEY',  'avB2lfgtaw7VnnDeAXwCIZMIms+LfYMIk/rIafH+WT99fOZsadS4ExjZaRTL3qVCF15AzMu+6cEsAnojz7mL3A==');
define('LOGGED_IN_KEY',    'LDxQjkbe5U/Bc+haS/0MC1kPe9Zxb8KlpKV9swIHM+XQH/wZiU6mQwNCbp4OOD8FsSdXSKlhXGg4S5zQE3UGDw==');
define('NONCE_KEY',        'qyRwI2gqugMT2bahnTlF9A2XmSzPo0WxLNmnttzUqi9cGL7ODrxI3ZHdxO813YxPYTLIhl1vG6XD3zrX7lxMAA==');
define('AUTH_SALT',        'EIcB7uU8xDvm/ZFuFWVyWhMk3pk/KWHVfXKveUmT7sd/67+5smMOgUOkWlnWjoIgJ0kBBz+JBCaGIYO5HwlAIg==');
define('SECURE_AUTH_SALT', 'S1PugoJwQRkr54SLyN6uhE/qBGCUUHNkQh54m1IcyOs5db9iKThkAvAH/ON1Qo0SfXm5JJKwLgqi+P2n0mjIkg==');
define('LOGGED_IN_SALT',   'nXW8c+4v0AxXIdo8M3g+ACN3umA9X4o3zA5MpfTMsoAfylqWpTgGrxt/Q9/WKNhfke5mW46zCwyub6C3rPVKeg==');
define('NONCE_SALT',       'JsTlsuJBrDhIMl2IRwPeiJc5RC/wr38XkzGARlckCYz+2+AUSw1DkZwUTw21g1HEUqKasZWhs67MOk5ow+I88w==');

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
