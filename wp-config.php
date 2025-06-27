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
define( 'DB_NAME', 'ranimahal' );

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
define( 'AUTH_KEY',         'jSZnHd+,Gm8Gb,`D/i7J~D>3en6?5(VP<;P81dPa*@: Z;eA1f,DZx_7!NF9=Xew' );
define( 'SECURE_AUTH_KEY',  'v@7y=IsN$ax>4q;H[L~TNTXGxoy?8WvF!,@; gVXy]]~/ Lya!S tlW14AbZ{t#4' );
define( 'LOGGED_IN_KEY',    '{_5_:mYdIt-/Li)52~i}3E<n*?k4O}]2#WMx&VfVOtFuCF^ceqs1gb3]Oy!76^v#' );
define( 'NONCE_KEY',        'o)+%8|TuRM+G,z#2qHH_ev=_-}UA+KUSMavakLK{X8o !*~^tSeV%]`7&@}ITb+:' );
define( 'AUTH_SALT',        'F{gru1KN3bH]g_*6mN@q/;]ieZ_S^m|+T|c|>63i#CL<fps>x`$AxwTatm&!A1ks' );
define( 'SECURE_AUTH_SALT', '={NY& cK.L8k+vQaSZ>ANcf79Ci>T~1j_b=B`^)QEOJlo{;dJE*&?OEH4hwpxfRM' );
define( 'LOGGED_IN_SALT',   'vb5XWS;]NuC;B??a*YmGFU+ V=NS.9d5*,qROG*JP8R`O61-q8lBh|S5&w:LZ q8' );
define( 'NONCE_SALT',       'MxYZPnhl&i6mCr zQ2,4}PG.5HUSQj:3@E85[BkX.>V&)s>M[,y4yKP5C|5IEUtz' );

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
