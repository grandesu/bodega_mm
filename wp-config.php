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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bmm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B1RNsuvRdf06H[g9~fS*{pgN 4GT_Z()CQmg1G/b.Ap~;HU]z|a=[qq6t5Ek_ji`' );
define( 'SECURE_AUTH_KEY',  'pH2CgV`SyDLhttnW&}AG2K(x+>h7 KFeZ8R7)r7C_7ug(cMv-!2La!w[~T;2qjm^' );
define( 'LOGGED_IN_KEY',    'dc| fmvy]|n?Ss$$iRb{Q%}C>0r?k#1s{TLJcsh$G6+~qSam^)%;vPE:v ]5,yHq' );
define( 'NONCE_KEY',        'k:,_H3>@JkPYY<$zo+Ekxi| 25{5DQGIq*LbtuU<28.YCGjro,CyRYx_]~=u.esD' );
define( 'AUTH_SALT',        'Q){wqnEC:;*,M|l-&e/hUQ~YSU[b^0:fWQkA+gMYhrhv9^ng7]TC:U`B3&:A=Bvg' );
define( 'SECURE_AUTH_SALT', '<[Xx%(O|R1$dS@uIOI@5ff< WCOz~)bON|<! s4cx4S5xLAeB&^g+Yy_gAJ1.few' );
define( 'LOGGED_IN_SALT',   'qHmO,/yf({mB89Qp:g84_CPwqJZD3cWDPQ4|VM^@;;}(,@PM#S,4Pcd(x|c:Hmft' );
define( 'NONCE_SALT',       ':YFI&|y{:XscfOL!6]u.]4b*S0M)Arl@U=-hYm0}g?n|KUa,{+Zi^~3dAuN`I2$!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
