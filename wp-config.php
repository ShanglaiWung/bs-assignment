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
define( 'DB_NAME', 'brandshark-assignment' );

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
define( 'AUTH_KEY',         'L]W0xO-i<~==wP{ASU/^65i8UWA0>6Ats7/y|H<lr}<c_&J)@RilZ;ugpIj6GTV4' );
define( 'SECURE_AUTH_KEY',  'l7QA$X9&hP0L<;wI20y}CA*?za+fD[Cj/Mfdo::Q^Kch]qAr5# U!$kXirrg[6p#' );
define( 'LOGGED_IN_KEY',    'O/[3RB+[I*{#ze.)vuH&I/$DO]PjpZ^w5 -DiV43Hc6MboaKK{M$]B/g^Zy,Bz+n' );
define( 'NONCE_KEY',        '2?~AZ_}S<^q+X7&C_HJ]F7#Gm6}A(3@k[ $+SW@8e*lW}8XfE2(m60Cv!G]{%l4W' );
define( 'AUTH_SALT',        'hj>!d1NNA||psM%Rb2Fi#XA{|CdrpPfh~Oh+s#6Lks_er+@D|oI@N!A?=iP*s:TG' );
define( 'SECURE_AUTH_SALT', ':k}9duCxpxToda4O8LH5G.`)5FcL{i2$dqF<yCwZiLA!]FToAs8keZ/g!v!<)FB<' );
define( 'LOGGED_IN_SALT',   'Xd(d(D@LVU`?3VY%5qyMK[+[tOWTw%[-_*tmkP;mBmV`;^@titK7Xc]{;_BfURCx' );
define( 'NONCE_SALT',       '}f&{-S5HsNwG%KW4cl#N{ pow%?YZbZ6|fcb!a?[Afz iQ{uN^>pv?J+;SJrZ(Z2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bs_';

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
