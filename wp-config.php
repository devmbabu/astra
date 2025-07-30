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
define( 'DB_NAME', 'astra' );

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
define( 'AUTH_KEY',         'P)&R.RNy JCoRX^G%7N&PQ9VauVz;UR|([.2!a,.@5V?57&e>4`<Fq|Q*]|rNgz<' );
define( 'SECURE_AUTH_KEY',  '@3lpaj.>5GU`5>+3%IDw0N>8_Zb|yMvHne&W@An(`/2=3TW%w@eIA>}hz)zP18dB' );
define( 'LOGGED_IN_KEY',    '~k{H3po& *F|7uPNxS5qxPSVH $wx:!g:tHQf`197-O;Shn5;Ue`LL[1i._WF_9I' );
define( 'NONCE_KEY',        'AH}_W/*h29ShFv.mR6s8gMsv)zeD_.lUG[M3beffMY <z Kp|/C[0|{%%.7x{Z:%' );
define( 'AUTH_SALT',        'xW8#koNP^A![2Jd+C:eW!yrdRjb[r_CrSRldSsjb6361!:6khiVaf-]&Le.u+?kT' );
define( 'SECURE_AUTH_SALT', 'KzP_*7QGltv9$V$&dy.rT9W|2fDD19;n.JPuw.h<W<b/k[Ks76v3; SwG4eI=!ey' );
define( 'LOGGED_IN_SALT',   'RMM8sUh?wPlFwMD^.@qDxQS#nmOT$3EXCS5c}M47IMdIsKd9aB<CK6Lf N])}srA' );
define( 'NONCE_SALT',       'q~7.{o:6}B!3]]|j*kB-Bl?z7nf4(,+Dl#o$3/l<]=[IIx(ionG>VVgaTe2~PQ+H' );

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
