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
define( 'AUTH_KEY',         'o~QB~=TO]7YkkEH^9G=P #AP?J&lae`S xw:Z-_V|4F..Dd.!p8aG!BV4%1>&2Nu' );
define( 'SECURE_AUTH_KEY',  'T@z8U%<WuN1ep38IjyHaTwBh%(Iz=-l2CnZ&#)kW-V{[/M(?V3tw-,m49`VzBsfJ' );
define( 'LOGGED_IN_KEY',    'pvZs6e[T^dy%~h3`^KBSa$cG$FUS@q:ADh!:D! :L4u9 ;#NH^zQnyCY39>yx97u' );
define( 'NONCE_KEY',        '2yo=mB|P_w7~Rrf8yY-`1+F%`7<{%f~nj$^?+?g-{i#9I.!*;yluX:q*ReO1[!1[' );
define( 'AUTH_SALT',        '_Iuq>Wb-Z?[1xWtrI7B6@9vhnuv%aO}yv78jyI@yrfM^~NLN=:;}et+EaTT-Nb%g' );
define( 'SECURE_AUTH_SALT', 'b=tHv%a|d^z[1^m^@*`(!/,rB%l=;SqgFS2E[YA4Q=hAK|xA{mps<*$MD9IBxlhm' );
define( 'LOGGED_IN_SALT',   'R}F4L,RMsYX@s1AXQ7caLj[Y! PJIYp)FY4C/>dlCr8[.I~I-0Wni(?1(t+YnU:6' );
define( 'NONCE_SALT',       'r[1TXUGP}A[&~C5-)d0C9tt{$9Cs}^ae.A<2J*0??t+)~iTgq[nS+Q!3TSiWpkPZ' );

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
