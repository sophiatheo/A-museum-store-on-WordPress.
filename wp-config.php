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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epixirein_project' );

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
define( 'AUTH_KEY',         'I;WdM5  4hr$<wQ4^RWoj)p(89<Dj=~O[2n-LxWRb;*k3v;- TADa}t5Gp}1OME1' );
define( 'SECURE_AUTH_KEY',  'n>Hxj703E~M^n@yaaDFkv4RM8<1,*{AR.870-<+{RN*TcSduU^ %U<U7{#0%a>,O' );
define( 'LOGGED_IN_KEY',    'b@lt=-VgG+uYZs}4?OK13&`{jba/Hd JGq>oiE8TX#/3_Lx(UcIw@SwVQ;YR*vW>' );
define( 'NONCE_KEY',        'Yi5qEj[9$D(YYD-LZrotN7nKm@4$LY^YU=I[,2R/Lu}{:=RDigX0_9Xl9@,15aKi' );
define( 'AUTH_SALT',        'JN<g6%f)VY$H/!y2]xr){<gVMzk?)pV^KEzV#l;*h!T%4vAf5bu||:+iUjtiFtA&' );
define( 'SECURE_AUTH_SALT', 'lw>W4,9}HynICO0s5%jpU5O3TsJ61-+cJ[Hgiqv:a;ipb-:u!%R_L_lL^F$N2]0*' );
define( 'LOGGED_IN_SALT',   '|[pVk74?5+XU9blgATl@?>Y.Jn[/M^?%QYG,1px@ho+7`]c&OqZCJRrFD_5AW!%f' );
define( 'NONCE_SALT',       'm-0<go}K#R^<|`.dFa;~v-j9?DlwI7{DAb]{c!FtB!-0^EZMJn7rb%~[rc3sk@}>' );

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
