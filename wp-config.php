<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'eEdHei2w6j9MLRuyNpzY3l28ISFe4omrhJjeWbdkmHgV6syhPAdfWkJkJleywQGb');
//END Really Simple Security key
 // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'antgroupsmy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'kiuwcivwyclkb86uqwbuf7iuz7jol3qo7cr7g9amwsvmmcibmfa67ft907vb1mjc' );
define( 'SECURE_AUTH_KEY',  'i28qj9gxg83obqhofce9szrapml67ftih9izmn8o5lfvgljzvjflvk3p3b2ahms1' );
define( 'LOGGED_IN_KEY',    '0ozguov5ytykewfvbrehznbwauybqzcmwfhae7u1nbmmp8agrltc5airvgz05rxr' );
define( 'NONCE_KEY',        '4zy4zcumkxqrwzdgx8rueys4znqyg7cst7wm2kr0dzjzke59amb6dijjoz4n6vqf' );
define( 'AUTH_SALT',        'qf1ycrl0wnjurrfwjbzvdzmpsosgvnjj28o6w8su5vtw18uqzqv9shvv4zkhtw96' );
define( 'SECURE_AUTH_SALT', 'cqh8tbbf52xktogs0nhkd58neqjdobpp1yeq0y92ahw1rdwioeaat7acftm92oev' );
define( 'LOGGED_IN_SALT',   'stkhrghpo1jbsett5gjar2bhcojbeehvdmyrkfnnjpn3dsmpeozkodvqxiswhxgh' );
define( 'NONCE_SALT',       'h3fu5ki2six8ygrr0mszvf6bkfcqwmzbyvj2d90fldy6s4uxce8eqltbub3ddjzu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpfk_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
