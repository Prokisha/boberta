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
define( 'DB_NAME', 'boberta' );

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
define( 'AUTH_KEY',         'rFTiGj[8>h*G6L8vOjE3vBwnJY^JAHC4h=*!tnLia>S+wOMs)Ip]CfqpEGfkSc.q' );
define( 'SECURE_AUTH_KEY',  'H}/h}*Qmt2g%r0Jrf.?~waNoYrIbg5>aYZm>U:0#9h,pgA.9>,[_Mkwxfm%af1gR' );
define( 'LOGGED_IN_KEY',    '#NK8RDwTv<vHrItS[Z$,%0,,{e[)st.AI}c/a?0!N-&0mt$f@KY/ae1?q-!jz0%g' );
define( 'NONCE_KEY',        'LBbs#_] wxL XPx8)u%+{7ae%|TW ^l/7.-4+(Sk*N5{;fFov2O|]G]iro8V*8 N' );
define( 'AUTH_SALT',        '`S4$mn.N:]H]C5}i[=]sL^Pi`=*Ho[{48sC9a^,eWvof|zd8*5a;PUx}F={RoV+S' );
define( 'SECURE_AUTH_SALT', 'K&e,<O;8vrG&C-qVMto7N$){:kRw8;wmVM<=pJ1IMi`a/8Mebz_Ru]JVL5r>|?&U' );
define( 'LOGGED_IN_SALT',   'mx_x2<gQ&ve~m%Kqkf+8[o=17!6o1p)dUwPlSzM`||c`vk7|?gv98<Y0PxL%f!+E' );
define( 'NONCE_SALT',       'iZc5aH&%Q6qiInJvPsqzxi${~KE=^vl6~k3RN>8+T*YqrPcz(]D></%G>q+t|o<d' );

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
