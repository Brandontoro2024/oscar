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
define( 'DB_NAME', 'woscar' );

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
define( 'AUTH_KEY',         '*]=Y-Ybu.{pSz^Ej:*9!Z0t6:|2CXY70x7pYV+W0XH; /HKCRin_wW|34#Jue Bf' );
define( 'SECURE_AUTH_KEY',  'N:k~?{mIHdn~0)({H4hN.rPIWzP| >%*tL1/88d`Pd)[vPIvQO0N:b;wK;2hlI P' );
define( 'LOGGED_IN_KEY',    ':7D qy/g :Q&SxTF ^q<hK.XS!y^RGQ1WSkm0*O)9e6 ;@*mPSMa%@udN*%ZXew3' );
define( 'NONCE_KEY',        '2HFq5E.=+dwQo)sj!_O;U-`JWun<59nfjr&%_dX|^^@,coNRdF5E~otP[yWdz&/I' );
define( 'AUTH_SALT',        '.k-qqT^2m>6sv`v4 dlYSe_/-@}%oRZRd2Un|[>6 4H1KB WO${H_lp;u/W$WSq~' );
define( 'SECURE_AUTH_SALT', 'F>U}(nhn3%2[,uQK~N*%jE.d#o~3rkVCd7hNA.r+I}${40,C<zVO[:1YRqUFdR0H' );
define( 'LOGGED_IN_SALT',   '{l=E]FFsbwyM>CL1yX+6^}nA!+v_9,t:%Ma2o$}<0KK$^U*KXJ=2TU]];V k8xS5' );
define( 'NONCE_SALT',       'I{MZq~b}[7X&gFi{dWJ|n;M<}ZDxhx3?8RT8:,4_wD10{i(p!]1JU!P@]a8?&|l`' );

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
