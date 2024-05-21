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
define( 'AUTH_KEY',          'f8Z&!hU5d%zIu)SUAAyx@WKbM9=O369Dw/Wu_l[W@{%mrxy^l[l0xJUu-BTkGPIM' );
define( 'SECURE_AUTH_KEY',   'ens[;2`4mCZar^[D&_j{Oi^KCJWha1[R?ZYzltW94HX(-@nt4ne[A^Y2=RV~CEd)' );
define( 'LOGGED_IN_KEY',     'Z)/GVVmjX%^jNn{Z^4+0s^}bjLVRS<)*#7S@9^_w^e&?I<#5S3y%H^t4g4ip+>%/' );
define( 'NONCE_KEY',         '9?:FgwMQ}VCV0#P6fzvi(PTo:]lHx_yeoZB*.^-h+0_G&N>rmKqf|uQqTC6neMzV' );
define( 'AUTH_SALT',         '0_vHEi>wL7jrX`Sx9yvfkqv/;O`xj40h@EvmQmA(QeQ5%EMqVMZQ.v.~2,G5-Op7' );
define( 'SECURE_AUTH_SALT',  'eyBV=2eb>Dhv*_h^Z*UVUZ=G&R=?kz!!8>ujRrNpCCsYsEC[fB?F~R+L7YO`Mvc?' );
define( 'LOGGED_IN_SALT',    'ex-dA{C+=@]^c3v4.I,(>Zn7OA5n y~TQS/{]y0?f5L(^mc{|iwZPTQZ.3eub~TW' );
define( 'NONCE_SALT',        'uL)wx a%}%, T0jogi>M$=iZaLx),%AV)imYEj]%F[NFs_:s2-HDli,=Q)5Oe%g3' );
define( 'WP_CACHE_KEY_SALT', '&=-E7eb_f>WwT!jMGb3J!/gVp|^5D)/+7!]CKqjF:$GV~3P?)~P&9(((d!PN+A0q' );


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
