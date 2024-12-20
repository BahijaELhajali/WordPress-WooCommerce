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
define( 'DB_NAME', 'wordPress' );

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
define( 'AUTH_KEY',         'O +?LuLIB5&7,|87AgU&Sjr0-I2#ogFmuK5K+oAH2cCObrgZ;=uojZ2lMBA3i^&7' );
define( 'SECURE_AUTH_KEY',  'XDQ>2t^iwe]/4NR5ns17|<JJ!~i $iad :|`9]a`6;?|:M**mw-/=&ND(EG*o;Vs' );
define( 'LOGGED_IN_KEY',    'FAQX;qydcM>g^N~3Qt>4m1Rl332jL3GjSe:}c]ORVC+kp+!)zKYt~g{r/nQTLA6G' );
define( 'NONCE_KEY',        'qx~(GZh;>}28{JM}Ixlp%3d?Img+{kM1u8wx=IXj(kNuy~Fm]~s6)vw*[59b;D4Y' );
define( 'AUTH_SALT',        '>/hxwa$ijRsh1bcVTtcG>d!=AS(u`mTg)}#J-F1l]_5u}90#|@UY{=knrqK;3.`r' );
define( 'SECURE_AUTH_SALT', 'N@z#iG~^vSx;mW!VQDZ-2s_=8Vl&)[9Oks(#eRI<WK&HglTjaOeC;|P7+dSacy(t' );
define( 'LOGGED_IN_SALT',   'Tksr2k*}B>V/a*%G-P5#Viv=eDm[ks BFx3QF7{UdDnItFWnmu}U2:weLIP*XJX9' );
define( 'NONCE_SALT',       'TkZ{f{QE_/z1;I<`,sO)-6sp%f^@!t#y#d}y<j`i#W1e2sFxJKe;A/bN0hJ#r!@$' );

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
