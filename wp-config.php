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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'W|&rn~nwN;p.v)]_?jF)B,_+DE[o}pf7 ;|c<eqn!}SbklhXVt.h[Gj5qQZZC>2B' );
define( 'SECURE_AUTH_KEY',  '.PU}/jSKnjf89OPRX{-nyEALUVydS^LZg^S:|uyk>:.sPiql|3IRvBON8&wcfe.O' );
define( 'LOGGED_IN_KEY',    'Tbc.D:sbBUP>}:|gYh!t!bIWNq:N.>q+b#.J*<a6Jt2u#0|&T[4)B mw)Md^Uf=P' );
define( 'NONCE_KEY',        ' 23ZE6BI1$3f#9>vLI5=i6:#1YBGIi,E-z}M>za?oID|]-@EMTH;~W+yr]y|m>+O' );
define( 'AUTH_SALT',        'r{o}FtLEt>,xeH0);A~gDw?*lIE^vd&sIMd(S|^ }Q0bwA/o5@!iskr-h_M7YJKl' );
define( 'SECURE_AUTH_SALT', 'R`(EyAHTib&EQuaQFPzM2w]GAJtY%iuWo.ss^:l9dVg!.N$8v[Q/QOGesK{z[1p8' );
define( 'LOGGED_IN_SALT',   '<bG/=9N(%O#{1.DhE329|cdvT1X8JOiPk~+?eM3E{8A2u4)KpgR:HKR^g6_XsU^u' );
define( 'NONCE_SALT',       '{~?QKeYj:By+$(K}kkR6izUM:e?J7lk.knKzol@Ya(e+MblA1tf4XPOC/<##:=Gq' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
