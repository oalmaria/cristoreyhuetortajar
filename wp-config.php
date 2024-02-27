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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'G0i8.M`,;ua5@+1C;tR_Qj#El#$%@eX$P/EPGA#7V__sN[2Cf;L$gHE.>ZawoOUz' );
define( 'SECURE_AUTH_KEY',  'Ad}-89r8J%9/JO`xn;r&F)SVi(*-8n=[I%#xWdsVU+X:TE*!hQB ?Hy1C813zAYm' );
define( 'LOGGED_IN_KEY',    '%gP)|7Og.C,JK^|_CguOIIy<{W &Nt%dENSg2~*jHiQ9=&=/.jSR[]5nE|?!>|U3' );
define( 'NONCE_KEY',        'jdP-VC$;JYDJUyJEOcy~L*.E+{$rCFQP[oakp811Za.C;7mGfl?s@tcf`IC9[ZSo' );
define( 'AUTH_SALT',        '_s0yJG|E_{27:xyJ:ut1hia[z&cqr;#Y1{6/~}hAq{|+u0VKar7TgRg-?d4o[MnD' );
define( 'SECURE_AUTH_SALT', '4>W&@%(e8OqzTBq+Eu^sF75FU|#4an;QIj=u<R]ZC1aIDEWmze|Wg/.^0;^gd4MI' );
define( 'LOGGED_IN_SALT',   'h}1RpHF$h=Dr^WfQx(Z4|k8la>r3>WGw(.b@%r-GjXg;I&cUUB](LXc=ZVlAQ~N7' );
define( 'NONCE_SALT',       'UU/-b8Uu1^d?l39f.9T$fZwY5k]z}H~@..dVP%>+TB,3mTPwxvVlj4wF/dm-[L&l' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
