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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'gcp_6a8fcde26dc0ee9d76f6' );
define( 'DB_NAME', 'db_idwanderlust' );


/** MySQL database username */
// define( 'DB_USER', 'b43ab3392d01e9' );
define( 'DB_USER', 'root' );

/** MySQL database password */
// define( 'DB_PASSWORD', 'ec274064' );
define( 'DB_PASSWORD', '' );


/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '=,4N.JA[GO7HrIUN/[@]4c?Go^op?sTnD#4EfThJi,=W0TC0Ma:!r*`2O5 %?fsW' );
define( 'SECURE_AUTH_KEY',  's{2>1Wm2DB-:Pv|H@Q?ZpI2_#DP bT1LElG>NB?tDEx9FvIjebNIm)gvkMD,rhr8' );
define( 'LOGGED_IN_KEY',    'PD-c<wXAf:O 4PT-ueW*{F*s$N(!}(eOLxE*5Z@l_ 27km@=13=Q`~+ac>+xRa!d' );
define( 'NONCE_KEY',        'uWZkCA?!bCTy(!],lj-xJJ/V:KWT({KLs^gmrm[JYs%=,Kak9KJejy[1O!iMsXa%' );
define( 'AUTH_SALT',        '|!(|/JSIuleOs3buwLiUS>!Hz%5;DK@5Km5TPXXRc`!}vZfGD)66hbrh0F ?N+UK' );
define( 'SECURE_AUTH_SALT', 'recuAU@NP_U]P> tVMJ7E,Bj(RB})9}|1|<//FtUYp]715=^z16u-3fb>C-B@t~J' );
define( 'LOGGED_IN_SALT',   '9`R~0]4p#X:KFMo=/ o]C[%uhwDv+=D4m9AF[47{^Po~+wm8EovIpJZGxU)wen1V' );
define( 'NONCE_SALT',       'iCdG9k]MES!%YqNe|9`l1]1!9e=6j*+`Ys0p0Ut<CCMIE^o1b@>|Jb|^Au$=@[tD' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
