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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monkeys1_wp_9e8vk' );

/** Database username */
define( 'DB_USER', 'monkeys1_wp_3tnee' );

/** Database password */
define( 'DB_PASSWORD', 'UsW!1ELHuP^434Q2' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
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
define('AUTH_KEY', '6ah7XbR)#_~J4Q7n7p84QjE-CG[@8u24()LEXD1biG@*(m6-f3]8D3#4br8Uy[W*');
define('SECURE_AUTH_KEY', 'B@J20v|vn72U6vv87c]#06VSM)QgcrF(LFI6EO|3[|#pX9gGGL5cta*GNKK51Kzj');
define('LOGGED_IN_KEY', 'TWa97EwlPoaaa84)mk4137k0*p-Y4SRiP6th%#ors58b3/PDd]3y4(38f)zV6G~#');
define('NONCE_KEY', '5n&[OQ2](8]l4mDyw84[n@fi;[s8-x4-6tp2t|5&oX9]43T8kk@-QYd#GWH1fycF');
define('AUTH_SALT', 'i5#4oOO:p%3J[L#;52R0eB9@!063IEBcH!0z02r2P14vzD+3i7%71swvn;6Ip]&*');
define('SECURE_AUTH_SALT', '91o|15mC-/@Ci@zt2b6cL#jNm6:41&13;+y+f3t7iq1z#o8HD@D_c%88z8j#B7-f');
define('LOGGED_IN_SALT', 'r5w0ME1na0)X!v@H3DF;[[i||3C[4y_2d2X9]cy(8:SoE4QqDb07#QUG#s)d_*kN');
define('NONCE_SALT', 'Df30C26w*G0cC3a9!4F:|2~6A%fqj1k|F)L7C84aE|Pe/@Qt6)8-qJ~(I+9l%p8u');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
