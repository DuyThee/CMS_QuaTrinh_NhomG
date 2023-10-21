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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         '4W;G.5`q&Lt9{]Sh2K3S}EZ<X^qchF.ULIAbXfMELFF}^#m5?N!*[u%&niOxK=7[' );
define( 'SECURE_AUTH_KEY',  'XGJG#+!7Jyr?$N4l&Q%9wa2e*zbUKt>>VRi`9|6Y,c[<<./`4:Q5.S9v(WZQ^IqD' );
define( 'LOGGED_IN_KEY',    'ibD`TsGNclDC!I:AX SJPi0]Q*$``nY>p$g;(U),xnZ9am+3o+mgB+aQINF%9XmX' );
define( 'NONCE_KEY',        '&vmP*&IH<?e]xYr1r[iV5zVe| /m/S3npDhqQ9Fa{)Bk]llo%VKXKYzk-Z77;wsD' );
define( 'AUTH_SALT',        '7YZ6Id-4#n1~>|5jkd3vj_swB$DcHmv/}-%C]~bZ)YLHTstO(wyreU!+[bR7}woF' );
define( 'SECURE_AUTH_SALT', 'u(F8x|:Khi.A>$xtyB97m?gxx@E_U>]Sp6U)-v*JY+C:$nl}6zKC4z3U}qmh 7AZ' );
define( 'LOGGED_IN_SALT',   '(l(U5%2>eB[~~%mnrhe-j!|542,9Kh|%AUV1mbF%y--VR1/u%Bna.;~x88>VNy6L' );
define( 'NONCE_SALT',       ',$ozE)0dj@XT7_U->s!%CksC/>Us/dAy;0bmjS!;R -y4S%- M#*BY&3J/7UuWhA' );

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
