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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'z@[F4FW`Ex]{3ZBr%)%H2pvQ;1a/U1^YrtN;~O=l8BRgP]>Pd=aP]kt-ANxig{L9' );
define( 'SECURE_AUTH_KEY',   'P_`{Mq^fc7`5b*lJ5`BxIlFvV~W;[5:,s~r?W_k[<9T2>|=E8WN/(|11k@m<%SJz' );
define( 'LOGGED_IN_KEY',     'mC-!QN4Y`K5?G6|NeF}&!<v&NDq7<#[PpbAt I@gTdDA2XRxBISD2*pcF0UyIdqw' );
define( 'NONCE_KEY',         '*c,6W1JL2No:XbN R,,0oEZ~kb|]d8lR 2hxr?t)hIOI0yS{`FBh,DK^KT{,=sqS' );
define( 'AUTH_SALT',         'X8DyP@*`6xgm?8quy8IKJ:fy`eBWmlTu-7_^.+t- H?4S2 D5{]8eCqJr0 r)Z F' );
define( 'SECURE_AUTH_SALT',  ':jUX{a&B^!Crml*)9_[ZEwzS^L<Jkb+_Xgiqrpe7OL@]xJ`3?6r*{]Q$y U-D[H*' );
define( 'LOGGED_IN_SALT',    'RGA7c}AV{5fo}vA$>rWt-O{lkIkk;?NZa%A@dx0Udi C/ajFdba,>~!sVQ{r:B~{' );
define( 'NONCE_SALT',        'o|nPI?.0hhfb#oNG4;tsDTv,z7,M&vN[HrxQBb$F?l}m-H/N=+=33S3XJ^ShB!fq' );
define( 'WP_CACHE_KEY_SALT', '#Kh<hQa*b?%OC,F~7oSBVG{.I~.tiL]m&v`<cVh6?JW`HKdTmWHxn9Ni=!5F_) N' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
