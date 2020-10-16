<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naturequebec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']UabUD5O4E?VQz e||<N1q*O/mW<oU_c-VPH+%lnE5|2HXAc?L@<>-=LD]#|G?Dl' );
define( 'SECURE_AUTH_KEY',  'Q+w`!A/BmKYRxm#Cpi6e-(mm!8UdV/D%O>@Heg~1}TYH}^W-&C3{[P6%r%Z9O`i<' );
define( 'LOGGED_IN_KEY',    '@hpUdD-e[Gg`xyPvLe!=BT j^[S-)v~1{ckdz@,uco#lM?X|no%:)|K9/aEw{0`N' );
define( 'NONCE_KEY',        'c=aJPCopbSg`y.RC dCt@nSgp,nkniXTY%-Y2(N{](@6*&en>>i57!-#PbY3PKMw' );
define( 'AUTH_SALT',        'b)(n(bI;*NQSB8fWI8o/ Sow.F CYZqjZ.G6MOzeQG0:NfUBSHkT;U#.g(- p^aC' );
define( 'SECURE_AUTH_SALT', 'gzE^T`1c/{3q2f#.khLEa,^CL|jFhPz^][H/)I*l]}O?hM[iY$gJ0FeyGGlg:&_9' );
define( 'LOGGED_IN_SALT',   '_V5]zp(jsitLD3<1>NUnW<H-{/v%x6y `EG ![,_u0Y<1FKs vbJ:1i!3O(wj*Ar' );
define( 'NONCE_SALT',       'A0<x/k^0Z6wBgc%=6(^-[Ue6(qf}9iS*Kd/4`XhJ8-_1qOBm[c%S@mbq1h}/N7v,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
