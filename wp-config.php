<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kbase' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AUER2YXbiRtp4cheFGj5JH8dg' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nI`s>r2T)evPlW;u9FkjQw)A=-`HDp8]w,C++!RCMu@sClG1=mF|56Gu*ExG71-2' );
define( 'SECURE_AUTH_KEY',  'G{1A_VhuYd,6X6`(4hqu(T4YQQfZQzPb#ZOM,T_K%8Cq1L@NU~R4M$6zNic%Jd]_' );
define( 'LOGGED_IN_KEY',    'hA,xX&}FN/_,:sa]Tb_;|5s3QMD=UDJ:C@WIHeGQxuW1L4%G!mMMv,qHjci A%L!' );
define( 'NONCE_KEY',        '1Rc =ugDjbs2ZM27k+[(C>EpleGYcWB wz igV!+JD)WUN[WA.l[WNmNIJl.>BMJ' );
define( 'AUTH_SALT',        '3qs<K=Rs8U(#<Ogl/s1Xy2<~uCxNS~qjb!WkxVsi+ae1N([:C=c+8ZfVfqfABaB;' );
define( 'SECURE_AUTH_SALT', 'AtF07[zTp ]6x=R{sdD+&2.cGYw1U9?1e$`4Q)Ol7)oIOkhxK}H3 N6MNRxI{btI' );
define( 'LOGGED_IN_SALT',   'FZH>Rn-es:TX2nl3;v|1%W >x|1#&g4{vEtdW[=@&cV7zt7gkd}F|2<^>N*O%eU^' );
define( 'NONCE_SALT',       '+^isi6-gr-8!=8C.i}f7v>B2=rRpcE#S=dQ2<s&|E3PRDfLnvXhc9<vVPGegQ^G(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
