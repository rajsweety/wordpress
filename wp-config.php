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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         'TsSkmY?b4|%vIBJSWK<8HIxNIl]4L8`Z4i A=PpbHoe_;h~+.sW>X>vX7Hw4Xemm' );
define( 'SECURE_AUTH_KEY',  'ftx-s#ln>a1Dz|_PXv;s.-y`64P}-W/#?8>d%](|<f3VCcfUlwrUB}~<jsIKjye{' );
define( 'LOGGED_IN_KEY',    'q^XFOYN8+22hr .^DR1_r_]}Pqm5hKUNwL{Jepyzg j-j9nJwIy*KAC0~<pycq D' );
define( 'NONCE_KEY',        '!(llpVsNAwvf7etlQ^O.&=yh4:hx] :}PPRP]4}ZsQ}r+eS%5?ORt^mRkQI]z=PV' );
define( 'AUTH_SALT',        'z?uvqTkPoI ,!{yJ!76(];WXiDP2AR1F$WCR]+>l0t|t_x<31;K?DGak6fA/b>fO' );
define( 'SECURE_AUTH_SALT', '><ll{{-M*Dx0^:L%LT3G)bYd+]Pp0,y(HmXCK(H}Bo+{c%h$0miP >o4(wBa%>[q' );
define( 'LOGGED_IN_SALT',   'S/t!7&.w~wDNCU0 %!ub,4,egq.yhvD,7jo-6-FLL2qN4FM? j(y}BYs=/se{k(d' );
define( 'NONCE_SALT',       'n.R@OBe-66PY^$8D$vv[4D&I[9: (*k%omKO}zlhvPd2$sG@)/=Y|r`PVEV Jur+' );

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
