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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GZ9fdNYS' );

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
define( 'AUTH_KEY',          'yhCpP]vapSQy(5M3tZHuCSG@J3pJ6&IG]m/m`!BdsW$}TZ/V] Aj>2^en*~&%!00' );
define( 'SECURE_AUTH_KEY',   'w>oMVZk 4s)<R.SP|vL)2s((fnDT.GV4^AGl^ ;0NIyfO{p}vD|iVbNk-am3F:Yq' );
define( 'LOGGED_IN_KEY',     'm`y*FR5++d^>lR2__5Q )F(k;O1/T}`F ;8`j[RQqzYqz>_3*rS_)5%s4N%l {84' );
define( 'NONCE_KEY',         '1SQ7LU#]C$|0TcBA9.OjwGYeK6{N.VX1=,Hw1CQ .LZq<nYCT>mG-XiM@/L1^<i5' );
define( 'AUTH_SALT',         '}tf7hC{u6C;~?(3bDiATnuG`<D@D6@]:m9*#t8:MJ8xbBGObvL`_yQG.3wmQrWMb' );
define( 'SECURE_AUTH_SALT',  'h`gwm2JUL]YrT^`bCrYftB;!H~qr6HMG!GU4|FjWK(rI)U=a.SY^Q]2[?)}Dv/`g' );
define( 'LOGGED_IN_SALT',    '=vB56T;_ePRj&66391IC4Fe^8U($E0+W{}W h7x#@ME1(J5-cM:~hm:P^}SO4{#c' );
define( 'NONCE_SALT',        'F]*kNubd&>BZ5Vcc[^Dd%{CW3q/ Yw>Z5&!jDSBU?,%ON}*f#2cN][]KIx{ldt/$' );
define( 'WP_CACHE_KEY_SALT', '[?CT;-+~A{y@V626L:[z#e{>fcNHP-1d%r,dg-zK0Ul[T(9>+<4RS8+1j#!Ogk;9' );

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
