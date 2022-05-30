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
define( 'DB_NAME', 'a3alam87_wp49' );

/** MySQL database username */
define( 'DB_USER', 'a3alam87_wp49' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c.3p89P!8S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bkuqov6ohhtgetqrgtt0fuhu4e7dbylgledbh0vxd0edovuqhouaeypcsodvqhsa' );
define( 'SECURE_AUTH_KEY',  'wlzp0u6ig31qls3xchb7dcleugmzjkgfuo1hrhcggahjthgqgrn7p7xpmim8l8c4' );
define( 'LOGGED_IN_KEY',    'crnb1rtpqne7jrykuwicwcsa4w1x2td4lh4pff1fjhz2nwcroglplwbdibfa3qok' );
define( 'NONCE_KEY',        'vgpeczkopqm1mxc0m6v5djnlqlwh1iyhy8sbp47nrvhuy8rl5v0a3jr6ui7uydhd' );
define( 'AUTH_SALT',        'no2fxnhgzphqxcnvhalxaq8cztlrrdmzoxmhbkmjn2bns9hs18xr0qrewhgyrccx' );
define( 'SECURE_AUTH_SALT', 'nqgfj2ildwyp6yidsrgeddu2n6fwztgf770hvf44lbjjdd8ddbwdkwphivxt1alz' );
define( 'LOGGED_IN_SALT',   'trrn3oryzjxonrczrqibif4njb36rw7g0ezasvvzn0k2ybedw4wcg3hqmgqzhs7p' );
define( 'NONCE_SALT',       'aroqingmbpyxwufvr1fcphezl35hpt0dqigtxsq9qzvglrcxwrwkuv7hqfp7gvyi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptf_';

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
define( 'WP_DEBUG', false);

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* Add any custom values between this line and the "stop editing" line. */



define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
