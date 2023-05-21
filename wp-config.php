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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'L?Pj-g`9~,Z5sIbT.u^GHc:cT;,s,533e02(cJ2P2xlfk&p,.X0pDxo]EDT#@BZJ' );
define( 'SECURE_AUTH_KEY',  'M9br1_:x},G`T>w(Cu9pp 7u(Ct/d{Jc}!p8]t<qLAlkWn&t~b?<;m:-*{$p.vQ(' );
define( 'LOGGED_IN_KEY',    'Y:TLdsiMCy|M|;Da~:@QN8)ZPEir K;!|Sf#OO]J6PA9$RV3=|rQ/g^+e9~n%gfP' );
define( 'NONCE_KEY',        'T,H#,EAa1rlD_B!|oK*l4`tm3Zqj0;d}lt>.~M*b:j!gRO;CTqL=szGq7$0Fzg>j' );
define( 'AUTH_SALT',        'nP3b%cibjZ4)pLi5`8>(DsI!zBd@j.U~G<`#SEAYA|Zv!@-,)SA]<fw^3|e)74c1' );
define( 'SECURE_AUTH_SALT', 'mV 5-q]j5e=0+fm;KMOaK`u;KqNOu;O5A}h(s0S-pYC,l6 lApaGQ64V,%SYoEdM' );
define( 'LOGGED_IN_SALT',   ' 4e+==T|pPDpIm%gA^Y*d(gWm%*5F`>PV^7JRPQpV(:tw#N/V2_{>_g,8}o{l04k' );
define( 'NONCE_SALT',       'kEM`K>m[=PdT.Qbr#$3 gm?{8#^KU%t9`7T,.tRYMj,ctP6!ckeDEA~Zb81EIDRy' );

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
