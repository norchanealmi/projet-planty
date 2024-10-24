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
define( 'DB_NAME', 'projet_planty' );

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
define( 'AUTH_KEY',         ':RN!ysQ7BMIhedv2>]L_!WIgh)m$||2[M,LOkU]7$qcj9e;E:WAft(38zsF3~5=g' );
define( 'SECURE_AUTH_KEY',  'kP)zoT2;uH39a`HFvzoCp^3)-uAIfGM;w ]Bb[nOIJlM4{l1&x%MuZb7 BS:&4EM' );
define( 'LOGGED_IN_KEY',    'Za]ip0|^8~7rd7Qj=eV?2et+MN{t:3BOGD{?nqeEj#DF]i%p+LK-tXl6/~*UeU;t' );
define( 'NONCE_KEY',        'hYx=KV=jDt .6P|.;<|qENpc[0YsiEF;%9lWy62Wj}[+{:}dC{#yD`4d}WYE/aK^' );
define( 'AUTH_SALT',        'P!GS!uU_F)AuhL{Y}s=Xg|OISsr&?UJF%JUG@8AD]rB {,fR_m*]DXB t*dWIqqs' );
define( 'SECURE_AUTH_SALT', 'G%A_ F{Q8[{M|.sCHKLjpcXu~J V@{wY_Jnr/m8X@tcaZ&_7!/jwsS&r=6M M5+Z' );
define( 'LOGGED_IN_SALT',   'rI0ADEk?pnY1e3JWrm1K{G>Wk!mgUTQ$X,M8j^Zj$W.-|>L`!vsazFgQ`6hJ%%?~' );
define( 'NONCE_SALT',       'rx48Z+V~djOF0N@7?I/psToOxYlv/;x^pe7XYrTr@.}cb<,qZzcYu[6~||iGA&^q' );

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
