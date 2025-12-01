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
define( 'DB_NAME', 'practica_wordpress' );

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
define( 'AUTH_KEY',         'E_I`}iJc#GQ2{]*=a:dg][Co=YDBFPK1@c<mpFjtyP=Rd`[jUQYE(h#/s{I,8Br8' );
define( 'SECURE_AUTH_KEY',  'DQ`)ZD3ak=Xa@!t>CTUh~Qq/3!+59[lvy}^DsVxdiU_1)]9ax3)nSx[S&ZbMa}Y]' );
define( 'LOGGED_IN_KEY',    'xmf-*dv@]P%mfz$Munc6:cb4`ji~_9a[E`?5t$LM[@6z@Heb{-*dnls:82>{7yd6' );
define( 'NONCE_KEY',        '9&z][hk4bu_LfG>Xb& nq?$u-)C`Ez6s+*5fczFSR*)g)l(4k- 9OHkCOoEP2W}q' );
define( 'AUTH_SALT',        'S3@p=/2u Z[:C %,@oD~v054D_9q@,xKgbi[]&ux{`:yci MINI+I7gN3Nmn)<yS' );
define( 'SECURE_AUTH_SALT', 'ps~~qkfwf1y{^CuzM}E/7i#=s~U9SW5I JFq$90Z{nb_)/YF$%Rr1:>BsmvS/n}K' );
define( 'LOGGED_IN_SALT',   '[gg?X#A69`|*1dv=*?%.mzoggG8gb#oAv(5)qD{yeo{B.2_5oPKMqC4k.M$yb>~ ' );
define( 'NONCE_SALT',       'G u~<b KgMe/.pXO-+sZ{mx^D5GMgk+s)6%8G:KW``g4gk}keoI:-=?CLq8f|[BY' );

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
