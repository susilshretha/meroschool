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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         '3k:DGZgAbf$jnvKy9GxKdtSoyY]>{sz%/7G+aa*y ~i``7{!Vw4%-g[lSBQ+;D#V' );
define( 'SECURE_AUTH_KEY',  '!1:76Y(d,c#av zdOfq@_6)o;.t~+A=sCi31#2eifqqo&]En5irzu@8g;lU;L~U]' );
define( 'LOGGED_IN_KEY',    '1tZ^hLNsmgsIuB}PzQ$,fy>HB)=Y-Z%+Nk#yjhww#E-pFy(BRa>SfK=9=I:BQQbS' );
define( 'NONCE_KEY',        'F-;Rqu$D0GG.&=)^i|(rP,6)J.u%Occme93rHPE:Xs$qV)e?eJ{P_ZlS}X4/]z!d' );
define( 'AUTH_SALT',        'pnO{x!3$`H2ZvbRWc0kw:F2KQWv=C*@6c~%~NIKM+7e7e>^w)>{SVwq{gt v]$0l' );
define( 'SECURE_AUTH_SALT', 'HI>8*?~u_IKg5i0$zm> VMQ6`OmN%2tY{MRyb(W,gRHz_tOC7@f;>IQJYYIJPS<M' );
define( 'LOGGED_IN_SALT',   '#,.L(X)Kzmq2.I!:#dDthnyMshq:?pf0rL&k;>bW[f)-qadxPjcp-4i]EIRm_Fj~' );
define( 'NONCE_SALT',       'L^;dY*Nd=CF+M;o)0[C6(p$UkZFn?*VAh8ySAb#?zsyFH@ULJ{(AA60y5qZ7aoCk' );

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
