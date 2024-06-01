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
define( 'DB_NAME', 'shraddhahandloom_wp_zcflf' );

/** Database username */
define( 'DB_USER', 'shraddhahandloom_wp_yojbq' );

/** Database password */
define( 'DB_PASSWORD', 'uKiRASkf1!fFj0%7' );

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
define('AUTH_KEY', 's#saHDM+kqcOa0KD+6+7;3|%2[-&90e17c6%h~|n6YB6;*7e9odJH5xcA:3Vm+m;');
define('SECURE_AUTH_KEY', 'T/9F][5)hee17)[4K:AUUc*lYUf9xP!VYF/Wn&I7O7OF)92N#sWgj87oD~&o/]9(');
define('LOGGED_IN_KEY', '6i:7T31I9p3W8--%2L2]zeWsD#Yp1//7PPj30g/&e2L752@Tci&s9cs]C_R@Bqo0');
define('NONCE_KEY', 'Urn|A95:~kNIot-evt1-~463I6co[i@lB/38kz3I14(0VrivUmCn1ho[Uaa_m1Hs');
define('AUTH_SALT', 'uKmyybf9~k~-;91rGH;0c4!-ty6Z;*pM12]48Ag5852z5i&|Gc8)C1*-))eCo*9J');
define('SECURE_AUTH_SALT', 'c!X&|l7PFo3-3~5e2!&p02q5#1n60Sg7%uQZY#K8@6v!Bc23opX6Je86P5bYw9Y1');
define('LOGGED_IN_SALT', '0J#TOrqN8O)-8_bN&FEj*XE8G4e9!(pYaE3%L2@ZqE|]z)9Dx2cc;SoR-Q0%ByJ8');
define('NONCE_SALT', '1EFv8&e5B1jXbT-J~9+u7*pLM6_O|:&+GF04Yf]tcRv5c[KtT2628c*9&V/nY6MU');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Z6cMX9_';


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
