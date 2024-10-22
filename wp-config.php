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
define( 'DB_NAME', 'wordpress_sage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '%4F2?Zuxj:EcvE<vHk${A8,Xd CR|)yLlsL!RHwJAVYJ<F3su5<Pwg7w7CIsFW5g' );
define( 'SECURE_AUTH_KEY',  'JW(FoRP[`CinUdi-kRvnt_?8zL>_8BY/,S|ueC.soP^zX[IZ.oi>SN6?J6K}&]Z`' );
define( 'LOGGED_IN_KEY',    '@U@>q)3V]R8I6pe>i6T>zAMA}(UIF*] EAHQ+rVu;%{#j/w1{]>f*AEgF ZAIi_g' );
define( 'NONCE_KEY',        'WwI@gfiu^DS<Z_hcv~1ToDRe`v}Ny)_sVx6f]rXE%ZY|cz5GB2?qFS.TqjR6tR2Z' );
define( 'AUTH_SALT',        '6/B}vpmi fAYzKE6Uh&==q_mu~>#.x>)c,CYELo[-S[?0R|dGZT=~N6.f$68+}Z4' );
define( 'SECURE_AUTH_SALT', '=fl%lflpXHM!dZ/umnaf=:)Go2Y%2[<f$M_cPI{&+o10-B{:w*(#vQs95jYuE}o,' );
define( 'LOGGED_IN_SALT',   '4tyX`o?XWoWMI)apIh,q=xo0ul? qo_XVpytLY?)V:C+4EBBNazE9}Ax0u57r1O_' );
define( 'NONCE_SALT',       ' zy;i[WQD[F,0 cevOq<}aqBEgz|iG_:0?2v6:)jJH=~|Ny6WIJImiMs9Ds7G;N)' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
