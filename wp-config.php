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
define( 'DB_NAME', 'wordpress_home' );

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
define( 'AUTH_KEY',         'FFN!jEbNW<9PYta5zNVQt0n]vS;YhesK[i|77MWQ(d<$I)r-;HZgl}xyG_kk{n|X' );
define( 'SECURE_AUTH_KEY',  'RBJirm<v5~]Zx8mU.o2H6H>7^s)5 A%3HoD~09j>?v?i46eM/jJwT.l[w:JAM]M2' );
define( 'LOGGED_IN_KEY',    '3,k$u[zyBX&&&.:_<ePF}N0zW!Gcw<9OCvrMvK^6@)r$Y;3cqMbp{N2(;4te:^vs' );
define( 'NONCE_KEY',        '@4;mPyXC}#(0kNzYv<S>QnBGB*]b%e{$|_R)LX~spty[;%,}vc79)FQ61_+,LrxI' );
define( 'AUTH_SALT',        '$m]nUJIUTta.Epa>GVqyD`y?;l>cl}&9uO2j3|me3yA 3t2gs+(OpSej}z-uQLTQ' );
define( 'SECURE_AUTH_SALT', 'Xbn:$MF16}jR`MPDWZtS#0*`e!_watjnAHSK(aA=6:ux~^^uEjiiHGetXtO$&0: ' );
define( 'LOGGED_IN_SALT',   'Wp5F*:IFg3zG2S[9tZ#*b,U4>4Bpiklky?-a9A <.}QWh0v;}ZbY](.foZ:4-<BR' );
define( 'NONCE_SALT',       'd<YET3g(8hl.d<yDp%7Oc)3[*r04Sp^EEOD=QcrkH=xi68bL1ZSkYa91kfgW^>uy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
