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
define( 'DB_NAME', 'moashqar' );

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
define( 'AUTH_KEY',         '&F,L-+P@HtuXhjLkD=aBmgY7!^jn$s|7mfPE?5pRBfw3zL{_ft4fx6`hj@dGj!5$' );
define( 'SECURE_AUTH_KEY',  '%en%kQ]*%1{b;}tnI]z8E}N%wn(mWSM.gg,Xt2s.MgEqh*dP$3w)CkYa{11h8x>6' );
define( 'LOGGED_IN_KEY',    '7);IlrG0y@h1x=mDK(|UM,ATkD^8qmd$&9l+p#8Z-[Zr WT^RsS&*|.abC7*ZD?h' );
define( 'NONCE_KEY',        '<3z4wN?%@ixZ:%gIRf/2:9UXiZ?X>fvz&m7`e[WM% n=R6+{lWa-$^;.,%_*6^p$' );
define( 'AUTH_SALT',        '>Dh%!q$KG!mA!H Cc8,#cSm]}f1~F>{+xh*GEB$R~BL9Z_5/I=m-.~]I5q.]PteY' );
define( 'SECURE_AUTH_SALT', '@jYf/heh!_0GlYw8R?!^aae!oWtzTD<wvL[zPLn#Ifphs,]Pl-aC(,PugJ ;c=4A' );
define( 'LOGGED_IN_SALT',   'Gi@q;(^4[U+qJJso;pb)mURtXQs.d8c7e/-witm~L?hT6:s|5e}2t {Q`9:9@U}P' );
define( 'NONCE_SALT',       'YrYwS-+;:/u$$3th6qi`L #%wN*C1=|=BF:#x?x`>M5l.[H$].3PxeKf>4902]gS' );

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
