<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_templetes' );

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
define( 'AUTH_KEY',         '?f}%PM%QNdWtpbW5r36~#+W:L1[m^`.oC[wsI9O2n+OS3G(Mc|fg64XxhPhbeDVs' );
define( 'SECURE_AUTH_KEY',  '3-zR%L[=S[xZRtWTvjg!5AIWC.;<]ziy*B},mEs63jD:Nw}}0k$7~(LWvhyw@/#~' );
define( 'LOGGED_IN_KEY',    'oQK&t3t~wgFjUf}b}KE``b2hFw}`[H6j)wCRJin}JR?;Vzl73zu%Jt`urC*)b4PF' );
define( 'NONCE_KEY',        'DV$UVy+`61OMSv0R5k^J63pT)ewH$.B;,HTg4Q05{UzlK@*K+S8U7vT.a`,`$@gf' );
define( 'AUTH_SALT',        '^UwHup;%[|2V0 WRa;^;wTPR$=A8NF)k+2nrs7H%pz02(b)2|tat+,]igZe&qKiq' );
define( 'SECURE_AUTH_SALT', 'AG1CNpf8,:dVPqawC_<qiojY^_R_=aF_.A]g&3,gZ1af!U >l&sk{Y5o[77-3Ny&' );
define( 'LOGGED_IN_SALT',   '%vZXk+cU*g,25gO0=lvAH9?TV%HqMjdF)LS#A^`4:^fzRyeN,K7+=a~qd-yJh;I6' );
define( 'NONCE_SALT',       '9Xcz9c|IwH;>4 AQ,lWD<UL)9[ob/s(nVSlx7c0dRFcv3gE[i)Kz6(^C4V5sVhwG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wt_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
