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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'escae' );

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
define( 'AUTH_KEY',         'Yz*C@j/fob~9,#2cA?6iRX6u%H*x.Ag]HJEj>>YqTysqz$>b7+Ly2?_nxtds2C@u' );
define( 'SECURE_AUTH_KEY',  'RN&)ivXvF&KtW=1lBw(<bW$-1V|ODomZw06K4)`HF654O3`:xR`}gk^i~z;6?E.@' );
define( 'LOGGED_IN_KEY',    'UDVMrDsH`C2CKiq3cc0xk7x&pXpJfFL$pt2wtZ$SG==X@Q,DA<tuO1Z6@{zK}V|#' );
define( 'NONCE_KEY',        'jH|,?IFF0B.&9H7zs-;CD:N@!z)wKdghYIWEvP]+-{qN05b~Bs,G/ThP9xlADh!;' );
define( 'AUTH_SALT',        '3=q-[Mb82-h8] z{D%Z_Z]%u/ssEJsq%<-v@up7I7x3!Y*S;N*!SSLkY:3j3B,[D' );
define( 'SECURE_AUTH_SALT', '/I/i!?m(#&!/Qg!WLs_pW{DFqHIu9KU*W:zetHn*16+mZNwDUm17.8;?Uoq.V~7d' );
define( 'LOGGED_IN_SALT',   'c#4!K}P,X^ /CS^C}{iA?m@Hd@*ih#ziUsZz`,.4Qd%E^vxNd@)/.fw4z!hoV$F(' );
define( 'NONCE_SALT',       'A6!vgbP,Gon73Tg(|p`yyP37vRJ[Xtm 9`ufeCQK*@OZA3Hi6(|/NyQh@ngHN(D%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
