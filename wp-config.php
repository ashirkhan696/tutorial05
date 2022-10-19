<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ashilkye_wp59' );

/** Database username */
define( 'DB_USER', 'ashilkye_wp59' );

/** Database password */
define( 'DB_PASSWORD', '3)8-IV9p.-HJ(3SG' );

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
define( 'AUTH_KEY',         'ldv3u6fofuawuwuyhl0jtnqv0zt5cvodzkpvvn9opx0eyqkfryomhmipyazcqvqv' );
define( 'SECURE_AUTH_KEY',  'dxcp5andc0jrlqwvgrls0itc7jut5hpnzsx0ceds8n0zhqualvunotphr2qwe8fb' );
define( 'LOGGED_IN_KEY',    'u4orglnd3twscjpqbqlstlzv6gfow0kjmt3ertxyzc6il1eqf3ijwaxf12faqfuz' );
define( 'NONCE_KEY',        'qghxg9i3qccz0yvjfhtfmw96nza5gjix1mgrzhpccfhxmyxpozroowmk52cfzjuf' );
define( 'AUTH_SALT',        'x90xzoujq9s5tmjadnv9zsr6zqatxfr7g7fxqps2iigfjj3u3kdmjjftugl8pq7l' );
define( 'SECURE_AUTH_SALT', 'dffsnr706kc3cgjazewaoub4vnihctussrow4fd2pxgjlmmciugwzjfsqiumac9o' );
define( 'LOGGED_IN_SALT',   '3mvcepu47ux0ury6bs4krseebfnza2iek1ogxaj87nmztqrdqwy9wak0obzl0vff' );
define( 'NONCE_SALT',       '8n45wubsa0bpw8lwaaqiwasvyxsaivwcsug0j1qmulaq04pitqzcspbb0rdtjesx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprl_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
