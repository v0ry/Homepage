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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*Se=$NI=4uA#jB;+_x{fadr-[[b8(;%c*@3z~:ymcE@V[g,mbxf=.A#{)q;z8O5D' );
define( 'SECURE_AUTH_KEY',  '!aU+EDI%a+u/9MQO!d^`iBV,l7hxkeC&?_E+<?a7x|.Op0/^:R/j_J~!7ctwKo4t' );
define( 'LOGGED_IN_KEY',    '@t6[F#=@C;CxB5xR=?*hP~n>g8%~T6)]G#0A(.:$1c5PJ! 0ssT5McBlkH@`YKQ#' );
define( 'NONCE_KEY',        '0gall&KtjavS(.u`ApNWBxWK0d(Wyzj35HM&Q`:2; wnFHikXQi,CIeaLKLe;G}Z' );
define( 'AUTH_SALT',        '!8@D%8{jC^1|xXk`<alwE$8_ZyL?bd&nKzfSH&Bmt;qtFLXi@(-<qYKXA,143R,U' );
define( 'SECURE_AUTH_SALT', 'K!FbkhKRZ@9iT%^QS;Oj`yq=E @~k`P}#hcX|lBcz BY;sTS+|k/sz@vkG9a4@!&' );
define( 'LOGGED_IN_SALT',   'sZ2gE-/=jd-|U*RA+c)^19NF^Nm#NDEf|!Qv%8jy)VLugB|TQj*ukW_qTw^GG4g=' );
define( 'NONCE_SALT',       '41.)^ww/Ne*n<8x ??eqT%v~HQqZF.g}#t^RfyGXan};1gR%8o[2GN2Y)UUyAs8o' );

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
