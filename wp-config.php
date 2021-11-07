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
define( 'DB_NAME', 'analog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Nu}D^|NcWr8:}:msSdi]>^}[%>}q,#|6c8dGr8a^m8}>JS?fvgVr:jY :Fdwh{]E' );
define( 'SECURE_AUTH_KEY',  'P>?1A{oawX!8Nmo`<_:&o+cn~G_je@ qLTg~|)bz}8+((PndE}G+2xPtxu&SXI7.' );
define( 'LOGGED_IN_KEY',    '+.7?G9Zmy$pD>dAM6(11Z_gjZS<h9N5b.WaX:Ia)_TX<em*=)2cm ]s;1W+XiCm;' );
define( 'NONCE_KEY',        'QdqHAzV*v%m*9j>lQxw~GE?-P99k+^)&@@ G3&Sn^]f`l%O{nLr9gTBJn}l_qUj_' );
define( 'AUTH_SALT',        '|HU{v.-mxJa+$(yv^wGk dwvVTh<Zq@%]cBev.fmloPzOLK6DnyI4Y6Jxt;~.)>|' );
define( 'SECURE_AUTH_SALT', '> eQ q??4Z@iR/sG3-{^toCGJ*`4sN.[-RIb6n&yNL@+|W4-!4`~_Y3*|f-W9Y-B' );
define( 'LOGGED_IN_SALT',   '#JUsR i#Z0 ,*aQ9BFf)3YGBS24kPP7e(Pekm&u@=cHavZ1dHFu}lmMV&^,UA<U(' );
define( 'NONCE_SALT',       '#>4N^9PVmHDXbPv9i_h;B}!LRoGkoUg#>&LI%vncWtYD/8b&Cb1|DQ~#2bpT?$/~' );

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
