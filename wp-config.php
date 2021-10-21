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
define( 'DB_NAME', 'realcrmwebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ti3rdata123!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Fm=P%YVM,w}DzvH<eg<2zdukfvKgfVY[*A;H`nen&yhatqU_D{Yw5w0q`.h@e~;^' );
define( 'SECURE_AUTH_KEY',  'kB#1uMExP<},<d;7@[fHlWt[zA!h^>nsab3hg+/g5x[#|S(pL%*F2P3<X^,J{lEo' );
define( 'LOGGED_IN_KEY',    ']QPdzE:oL9C0)vB<|#PcMwIP5Z)HhA!,ea,9flZz;c~?oQ`*I.H*iKT.^l_M)XI-' );
define( 'NONCE_KEY',        'hxkHjGsN;XZ$1j;Sq5qRGmJ)B%1z0)3Uep!m|B 1j7AVE*P~A1xszxeUgYc+m$`s' );
define( 'AUTH_SALT',        ',*H4Jil~*zh[]Z,<g/A]};Ime[t$~i3I^y~WQ?+~C>:SB4))PyAo7/.9I^e?^/W-' );
define( 'SECURE_AUTH_SALT', 'nfycP4vFy}e.p^=WSxQfaj5[UV!y)Vams87d _yzNo~/KR.x7p=:#4YF}l@oJ_8B' );
define( 'LOGGED_IN_SALT',   '!!OYSJiRbA?!e9Dr%BNMUxW)4Zn4*4Gu^8CiiB(q<rxO`A}2y qGc,cH}H+m~-,t' );
define( 'NONCE_SALT',       '|erd7%2C/?U$zGl2WJ|oP^[TRsjF1s!jcD[|w!}WULN:t6Js_Q~Upgx=+k Yo?$D' );

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
