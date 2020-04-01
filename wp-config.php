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
define( 'DB_NAME', 'aim' );

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
define( 'AUTH_KEY',         '_y }#DX`rm.{4eG1{7oTz*N(2?u~P2 Ip-j-b<<HhO2.GgKfG/Sl1#UWTR>mXzSc' );
define( 'SECURE_AUTH_KEY',  '0OT_fw#9tj9!z$TTr)if@R^o&_3-$&ZG1X{P C~5z)=+T}+y:j7J^uf_$hKs 8wX' );
define( 'LOGGED_IN_KEY',    's`xgk#TP[x!E<@SP%ww+3=Y};?9kF~h+?9TM4*B:/dXY8:%L7{z@=AAN^pl(dK>D' );
define( 'NONCE_KEY',        '#rzhZ51Q@liV,bxr@}~G#SmO!6NI#^e]d=PH40lKs^^ndq<:;R6}IK5k$Nj}+8q3' );
define( 'AUTH_SALT',        'OonL6w}[-#5vja&aPxSZYWW`FT4(xg)~S7g^}=g2^ `HN@ITR~>-G$C>A<6`qmcE' );
define( 'SECURE_AUTH_SALT', '&L)alY&CeZ7-st|j>Wy^_=!0I:`V/wh`WKiCL+-)k.om,+3l/@sLLW8bA#69 qO{' );
define( 'LOGGED_IN_SALT',   'HdA) *??@*y]BHrt`LaLM`i6zt*v)cLgYC3O+zOr^(5Rz~PS*rta(OKk@6M`iCpG' );
define( 'NONCE_SALT',       '3HC+/}vabf@z.d$[ WlHi?(5wH!gY^|:urGA%j*UGCZ_DSl0,.~i~6Y 6A=-yF^Y' );

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
