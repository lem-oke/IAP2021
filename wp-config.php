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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' 5WkgN GcT{EYOBG1>$+<!U=NWbMpdBe9|!Q!Hb,Ue^3!om_|D!x?bnD/1;HJ/5N' );
define( 'SECURE_AUTH_KEY',  'j+qz/C{RV:Uk GK~S2G/EiW$fh4;SqSJAa~Xk&}5?FqTi q@pyFuc2Z3qh`r%wt3' );
define( 'LOGGED_IN_KEY',    'r|0%<@z1<n&=3&!Nzx64Qk2*Gtyc*3jT**Mo{.c(m3Gp.NqM@MIO&3HyuG|[,,Jf' );
define( 'NONCE_KEY',        't83ZtH4r|7[BV6IVQ]A,RMB2E47oQn|B|Vu%GUd2wE ^+?{Wq@i/E!80]rHUbmXX' );
define( 'AUTH_SALT',        '9)+li[5_~P:vZ^ZY1O]73dw&d6w#AlAEjPEY588&d(zUBA<p0<TRfaF~?C3&`FqT' );
define( 'SECURE_AUTH_SALT', '?^dvy@}+l/>]KbmaiK9*nukY^y*9bJ7w0d9niF vDX_! +nOM4M b],w8}0T4,nM' );
define( 'LOGGED_IN_SALT',   'v|wH6cnR@Wgc3L0twJR<`}0xE`tf<+ op3A`Mj$wr;ZG|eV6E/F:.o+&zFTjaD:Z' );
define( 'NONCE_SALT',       '1DoD$RQ;,[,F&r oJ$I*:1H*J[: 1R5FwXyccyFm-5T#;y^+oFW8.CYhudinjY/7' );

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
