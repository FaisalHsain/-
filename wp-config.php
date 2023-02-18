<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'faisal' );

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
define( 'AUTH_KEY',         'r&?FiE#(1yOHX<Al*|nx;U+:f) GTFJ5Tw={Qh@=tDRZ2t$8?r_V;_e>dMc0+J?w' );
define( 'SECURE_AUTH_KEY',  '.p,Da[10jiw[hP7l6?5xr(T%eeJaHX1^QPQ}OW{/8PaJvZoet}/ZD^z$Mj?,AyU9' );
define( 'LOGGED_IN_KEY',    'GBzm&f>2cpkST&a@yr^r+tKA:=^?{JO1i0#cky8P+:Y)zw3JI@]x]Y!ypLdHMxYx' );
define( 'NONCE_KEY',        '~LNeVeV*Ba@gPWe  G)$UJb_K)>UGudIu!uk}xodIChrrVBl+uM~O]Om&0Mdj. z' );
define( 'AUTH_SALT',        '2+NSzG=],R]|`VsWX6#k:`tdX4CRomSc-%PSP48198_8>iYaI0*qmGtnFd(OJ<0)' );
define( 'SECURE_AUTH_SALT', '~=LSjs7O;KL6y/]I8O%8$Oc]YiBY$Gl#F R.byr,_cWz1;{Y~2V5e`J).)oK|A.H' );
define( 'LOGGED_IN_SALT',   '*FQJ[Ulr),URY3>[:yDR%0D{M`r.#V.Ki>VfF03%%G.3YhK67vsPT^vHQ%OE=P,e' );
define( 'NONCE_SALT',       ':P6G%(FX=x=?(n![&p[RBoI]DF6$`(uYw6SBC?6VpmC|$Rcs1@iZ5>)>~0fT<;Ad' );

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
