<?php
define( 'WP_CACHE', true ); // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'db22pkzb497unb' );

/** Database username */
define( 'DB_USER', 'u2wa6l8rczv0r' );

/** Database password */
define( 'DB_PASSWORD', 'k1bsbfhvdgnw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'f-GHVg#0N,X4zWB_}yo>GxbZda(>J{^l(e**F/ PS8rGyd(OK*H|T_jAQPb^N<wr' );
define( 'SECURE_AUTH_KEY',   'Fac^W`Q4+CIVaa<i$Qb!Ab@;^=UZ<Pc[SN9X.{=K(AGuC)UA+Kj]$!Itk.LqoGf%' );
define( 'LOGGED_IN_KEY',     ')fQXCA{D@;L#n !2:*P*NpM=%7*1WdTe.^nX!L+A9`I)kT]a_$7)fI:G6L]j8vGq' );
define( 'NONCE_KEY',         'srGf>KZdAaoI^)`9r4[o2T^WeLH[ D=MBD@~+E8SsmmF4Lu,_7$^z.l(2Lvrz{C:' );
define( 'AUTH_SALT',         '.`6JiH7:-i_>jbRV!!Le01oz,+K&(j4M1KQntWw%5aYKwhV%-Tva}Ma)pgC~IRIh' );
define( 'SECURE_AUTH_SALT',  '33CEL*P5Hp*E~?E~J!vxb~l-gkAx1s5-thyG)pF[CV(iB RF[nI*l!vhCzwtWSAy' );
define( 'LOGGED_IN_SALT',    'xq0L1Z{+~o!|,[BDK8/.1u.Od,?gW0>n9~eL%@GM]:*ei<>T2vg!J;1~y)KP^X4_' );
define( 'NONCE_SALT',        'Fb,(joiW|2>.kAT/?h[zI:A-[dIB<uVC.b)mvc~IOUHFWKUxnueB~=Ljid+E# rX' );
define( 'WP_CACHE_KEY_SALT', 'l3lB&Dz %4{% yh.mBQ|us@h0ET#  :#nykN73[+)1Yy[=KOmW-]u:`(&P$~_yz5' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
