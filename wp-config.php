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
define( 'DB_NAME', 'gcp_6a8fcde26dc0ee9d76f6' );

/** MySQL database username */
define( 'DB_USER', 'b43ab3392d01e9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ec274064' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-gcp-east-01.cleardb.net' );

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
define( 'AUTH_KEY',         'Mw-BbPQN6a}=^`yS08.:;f=a:;=S63Zx|njcPF;B~1JZ%8.Rrg4y%v~W^hP]XjuE' );
define( 'SECURE_AUTH_KEY',  'QbO3sL6,GFWLAk{Mt$jcN)6cPtjGiT(x0d(&>IxR.Hns9?F8Q>{,!:}I0#GaZ]lg' );
define( 'LOGGED_IN_KEY',    '9mF<}0f lU1kkOhHH=`q%:0F9/gFP}p>*hS6%m/a,(Rot[*$gJi#YJY,3oY2oc^Q' );
define( 'NONCE_KEY',        '5^*p,W*1$3&EOz#q.O5mj?zo8Lh&i.pUQi.PI7gW%{GGwyed&$=KT_#UWE ,hVmM' );
define( 'AUTH_SALT',        '#A^T^q-CM8sKp9%sg$~(j|!{ -zB&QP+#pTMoK!^/nuLyBK_V:U}5Z.8!C=5~%DY' );
define( 'SECURE_AUTH_SALT', 'CiGBR9wWGT1w5!``d&qD^]MZ#@<4cNuAfw2c;K1$&V[Q=6SKS%kzGJE.mt=nC:/4' );
define( 'LOGGED_IN_SALT',   '=?[ZuHnO_0Mg`ONfBpnI[eW{#P-j1DC<}OEOF_3=Bm?rC#}{~+#CSjksaL:&<eBA' );
define( 'NONCE_SALT',       ':3jLMxPRBUmIFq%hFAhw,DDcomuWN:T{tkQ$,8oul,W^]75lb3V/o?2_K**oEzL!' );

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
