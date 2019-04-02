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
define( 'DB_NAME', 'da_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Q9b/%pr_zjqRj^DSIiA=3/d!08l$rfpc)ehF?^-8{J[7qmS~}N1bbVAiNJ0sP{R^' );
define( 'SECURE_AUTH_KEY',  '`q4;`oY:g9J3vxB2M`@*:QdD^>UE-oI%!8aD[Ztzl8#]gi8qt;qI;*ae7!t0q0?+' );
define( 'LOGGED_IN_KEY',    '|q?2%=FdMa}EH0Z+6p7Qe8ou:>[utV>|&,*`Yji81og0{ZwQjTEh4[Fd@3SU!K+8' );
define( 'NONCE_KEY',        'QVSrlIT^DT4YAE?%RZF=wIOukDo^@MiHuZmoii_G+:D :yn=IG9hj!J+mz;&9R+b' );
define( 'AUTH_SALT',        'sRVI}yYdR.0R--3Pd?q0u` {0%M<3Ne|_M<Yx~c`(/gCBX9cuN$X>r=)C]G0/L6;' );
define( 'SECURE_AUTH_SALT', '3~r$]:D!nK yVMe|&P0#ZZxmk#H6LXR?dr3s)5eMlRMNm`>24(LLVlhQed17F9Ux' );
define( 'LOGGED_IN_SALT',   'f&})luD18|r^no oB{%q2jGJV.eK0~bB{@(z!J7?@|S4`I{H9Z2Wzii*Yf6H ;B(' );
define( 'NONCE_SALT',       'ev<-FcR?g2&^%F>ZRx1X%Sgg1fAbqR20&^mL ed!^Qd_:q39]L-=< :/sa3erHQe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
