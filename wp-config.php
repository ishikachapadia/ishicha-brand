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
define( 'AUTH_KEY',          '{_)fxn#89`x9)0YPf!r|LWyY~#C.Bc`}_&Rvj#z+@p^zZ~~1dcU~M<h4agE:1l+*' );
define( 'SECURE_AUTH_KEY',   'wey.Ln#; GXI:QPR5Dq)Bp9p5+U0@0C1> jxb ]tM-DjlP])JQD.)JCN[D`KK:PB' );
define( 'LOGGED_IN_KEY',     'z(GI)NQ8s,(rOK3d9fa0t^4]JTV8*V$p%T_?/N:H1k1u[OPQWENe4OGp-;@^R7GS' );
define( 'NONCE_KEY',         'V8TWd_B:T,[tWj!::]/jX#=RzG.a(^&JEU>_Yj!d.ST 1dFdbOdX*|,b7ix[Lc$C' );
define( 'AUTH_SALT',         '`C4fNQ smaO%t%0F5#^I~qZii?29k|Y2s=tP^_j;X>if.gg-F&^yhAZ?k#rXZuGa' );
define( 'SECURE_AUTH_SALT',  'bGDO*G6X*vS ):c<[[bCLxT&3{-p1]b@~:o8/VCgFZ[LZ!h0BZ14jj)fQ7V(WN+9' );
define( 'LOGGED_IN_SALT',    'u,B?ZoF#*N#y48#rmox]*>x)FryHLIPPvdZ((Ca_FTU/VPh,]Jr{T@7`c^5)k[*7' );
define( 'NONCE_SALT',        '5uLo+Eu!2Ds7[I)TTPH:g1C]X`Sa::n*sv{].)gM|&Sv|#Wc(>dptt+osBBh68*f' );
define( 'WP_CACHE_KEY_SALT', ')QZ|ni6L$kI.<vr`oZ`!i!UtHF4YWD>~8awvY,iG}e=0bCdjV=*w%]s^j$1%iaak' );


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

define( 'DISALLOW_FILE_EDIT', true );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
