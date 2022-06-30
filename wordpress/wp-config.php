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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'G(Lkk)^I-r:GIx2wH?@G_LQqa`|gfS%D,*?AyA/=gea#=r.5ts&tY5Pg.QoK2g`-' );
define( 'SECURE_AUTH_KEY',  '0!5JeE?=7:FBv&sqthDmmfEvU5g!9 ml0uQ+<Nw>q5NJI` $**Mw!T@g|+&20kZm' );
define( 'LOGGED_IN_KEY',    '/ 5O,][i-*&eiCAuQ7ybnE4|i$^c~`N~x%u._so3xX@HArVtX.}r]RP=f{o*JUla' );
define( 'NONCE_KEY',        'uIH~IH>L9>DQGc;IezgD#D]dJpW:e{%x%>R(Ud2OeUG4Iv{?]g-o~4jK[PpRz~Bj' );
define( 'AUTH_SALT',        'az8yP~J %ylSy_yl2B*tIF~MS/d04x:S33$ec}VEsSPW59M=)!mx2?1[C*M&g;:U' );
define( 'SECURE_AUTH_SALT', 'ozTP^$V$.gy6d_{-iY9QAZ=Ywj^8?qD:OAp7 |n/D990*T,[Y~fJ{p+.q^rTIZ0O' );
define( 'LOGGED_IN_SALT',   'pH<-5q4lt|F`>5^vDw=d^?;sZ;ULkM@&g,$2Ky_{8X9S,A4qL>pdSC1 }*EY5~xQ' );
define( 'NONCE_SALT',       'z+Lt%Uhxp,0x,f@@u*XEvxa>5AZ5VGR#(>H6moG6Mcbn wo:^``(`3-<*3izxKM]' );

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
