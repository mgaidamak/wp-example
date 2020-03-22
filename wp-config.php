<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_um4l3' );

/** MySQL database username */
define( 'DB_USER', 'wp_vmp3j' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p1MY9v_s7R' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '9]qA+~_+*2I5az&ZoF64DpMx8464_#b14+w27lnk(R;5G6[/3i5sN|kXng9:~578');
define('SECURE_AUTH_KEY', 'P[q1-qT6L7o9%miYe8R*4*1-2U(+[K!1):9:/fRT(/E37h%7-rT+]IiX;gmuU]x3');
define('LOGGED_IN_KEY', 'm|b_MWGP(r-e%P*~Z57[P588q11SL4Tg4RqE8[5shQf1F%_ol%402S/jJ(DIH#45');
define('NONCE_KEY', 'ZS#UYw7zGu6p9qS/;_758L~k9y9Z-6s/u5[4(Q:-A9rNPSm(|7rQn3e|cY)0n2dR');
define('AUTH_SALT', '2w/@8/44L[O%@q58wZ3MR0v1A4bsG73]eehhR59V:177gV[4P9+v1Bts9m*S3j5q');
define('SECURE_AUTH_SALT', 'Bgh3#-X+75X/:rToLX6I5CE0(anW~-u#2XU|7!iyw5CinX8]kw2BJ1*h9YL0M0P[');
define('LOGGED_IN_SALT', 'IAP5:X(U924B#0~8C*n34@[0/)kxo(fa%GK*Mt1fM3_]cHU7W68E03~W:myT3/8n');
define('NONCE_SALT', '_cImM6((i9x%16*74|+e4P7J!:0WKSlCn602L2ulxj_|iihsrw76o3**y%#o20XQ');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'I90v2_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
