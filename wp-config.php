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
define( 'DB_NAME', 'ANDINI' );

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
define( 'AUTH_KEY',         'U,@od<(~a)k7QGN@p6Yg*7/$+8)jr`AvNJ0}seEieREK?x)zk w-1Wx$;L0fRZ6B' );
define( 'SECURE_AUTH_KEY',  'bb1wtnW+:vN[h)4}?(KAMe2EPH)mwy>4WWfY}P~)%Ejh!deYm;Om/*>8q3CqlH4i' );
define( 'LOGGED_IN_KEY',    'Y[k:$Dg>#X8G#.7d[5cR%@rk_t`l+o0k%=[[{CT$P.Gg!(0Ubu>xz:Hj$<e~:u?a' );
define( 'NONCE_KEY',        's!rT^E0i&/QtD)$mMb<5Cr6jw;=D{=N2d+;8G94m)<]N7x)S/X~~c|EO_lf)Il!r' );
define( 'AUTH_SALT',        'T;fiXD@&U[<uE^|r*%tH.v].h :5qm3dWiaqAM<bsFPN6W/c).B)43X7ww86]  U' );
define( 'SECURE_AUTH_SALT', 'z7Y]I2TGVceJE^-iRFLuCOld=CwA^P`boCu.Dpa34369/~LK.,zqfI|4._7OqC61' );
define( 'LOGGED_IN_SALT',   'N.-Y4TlX=0_F-e1o564poZh=o}V7GZG54g+9`$j>3rt]umtS+1ph+3iL(cH-I[46' );
define( 'NONCE_SALT',       'Ea$,7.ai6L-9KK4r#lSs:j(B^%~w%V/5yz!lny66t+1 sq3n{UxyIv:vgXge/tJJ' );

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
