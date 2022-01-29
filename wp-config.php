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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'online_shop' );

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
define( 'AUTH_KEY',         '@PZKqkO^Fdg.|>payn-)xvx58b4,EYhV7w,/?m+GjT-5X)@>E%MnCu}P9prj-TF4' );
define( 'SECURE_AUTH_KEY',  'utl)M&suRCSd4L!.4[F_KPy#bvuaa)0-dy}OQ[H^PqKMQfyo^p@~nA4|2@]xF?E3' );
define( 'LOGGED_IN_KEY',    'X1c$eL}|P#P?O6*1%x_Vd/8)|v6r|BENaY]S-~*r|)}Zgm>|lev?kw@Oa#[<Kl=!' );
define( 'NONCE_KEY',        'b7;yf;CQ/oV(/[h2R_Q]<$:t=4N!B{hZKS<O;K@:D|7TWFwvrtR)>XCCJ%f0Q{4x' );
define( 'AUTH_SALT',        'rtiaQB8c?zHix8ITg}B@a!V#_Qe%!hR+aQs/vvmbW>z66w*}Cm4BU#N<#Q]^AW<|' );
define( 'SECURE_AUTH_SALT', 'z=eF7,Us5B9>E7%9ld@6w4R]x{TkHVf~3JVLCM.IzD2 &-:/zHf]_<,PW|u8u sS' );
define( 'LOGGED_IN_SALT',   '1&17U.e`u|Ys#HCv6L?7Rcv&I0aKXkYIDCEr/AQ/uF}L!)*>ut]00 w],32Btu;G' );
define( 'NONCE_SALT',       'el&A}W)[pB.x]x]J6/!!Dw#>ON]XVn|oIIf**E|l_JYias1,i/GntFpK0l1C}rb?' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
