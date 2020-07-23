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
define( 'DB_NAME', 'demo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+ge.JZ9C^vYsLJ}iearY}[zZLDN0Am+W2{:Z%t+.6QB{l^8q`*0@Yat9NPS(]yM4' );
define( 'SECURE_AUTH_KEY',  'T9UHNCDq`dw_8vjc6$SGIKcR{f^F@^p+T6h9GyrI,rz}~Qlu,*{dxva|YiI4]v 2' );
define( 'LOGGED_IN_KEY',    'YrR}p[I9>)rmyP3y~pnE7JsRowF9I.$fjtl^[ M j=%f[ItCP]o2&]MJF@W{a 0e' );
define( 'NONCE_KEY',        '{Z.xH3/bm}8~X<2>FF,ue#XM9>(K-(oivVCGh<VuQUC6hGl@CheGOT)%{<_<MkN{' );
define( 'AUTH_SALT',        '_=|yeZK8$1s@&<(1t&,GjRh7K804Eu] F<IktJ[qh^xd]lKj.R_(f{}{n.h4~[U^' );
define( 'SECURE_AUTH_SALT', 'S[DLq0Q49V`Cz^2INtSsKN^bS=2tFiWBo xFLJnKM,U62;F/@i>M=ay^!p g#,mE' );
define( 'LOGGED_IN_SALT',   'b[MwEu(pS&Q0A|g,Ed s:C)9pwQGJ]MOfW-t|*5dK{Xp+Z&%vM0f:uU5^<_2RF+>' );
define( 'NONCE_SALT',       'CPlor003ct+1~I+mn{KD$s6wDC]3^7}i q+*ia!a-RA_|}4z_e|Y5u:  @<w(,b!' );

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
