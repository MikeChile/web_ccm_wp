<?php
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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'j{@IuR1(EWTZSTg05*N6wN#o!;]~qDA`v%Lmqrv1=X}K4NCi@nvFNXypK4LqN6iW' );
define( 'SECURE_AUTH_KEY',  '3J.B]]^39?r;`Y03Bb|[;]7%QaUNneQ)%yw!^:kJYhTFBTMZ4PFOdST~ mJA7SvA' );
define( 'LOGGED_IN_KEY',    'dR[Lg+k+!LP85zXYgEvs2^?]$&1s5 /D6~@h{K:6xLbI.gX#;^a3Id#rtu_xi{g9' );
define( 'NONCE_KEY',        '_2Q+4(%Z@48A#qL0Q1i4c3J89N_K1^!%6Efq.f|{~pFnLH*6n(P952%5U5g8SUwK' );
define( 'AUTH_SALT',        '>0tN=%H1~/76V&ysMi,k|LZF,w0=#GiA_$cly&v1 r-#vL?ICob53_?tcc{_mlb$' );
define( 'SECURE_AUTH_SALT', ';w LR-KF>^~*O1zWi`$>5QfQ`XIXynV$>MK4eqY24FC0n}DX?.6KeJ/%ru U`_`>' );
define( 'LOGGED_IN_SALT',   'P:Fqy-4gm:Hmbn,8G]CV<QQ!E-Y(UA!57PJjEl70*@MparGNW@tH=}7B^!i46]f<' );
define( 'NONCE_SALT',       'mQ{|Ko$`/BlKZxP[Jk;RXZff6vk3{Y&D/b ^[9Qw7=<l0mE,5teIRQ:G}MKNU0Zn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
