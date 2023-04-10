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
define( 'AUTH_KEY',         'U51_M,6x4Asxs+s.s4{4~Iw`*|h=]/J8+r-(++4OyC9~qg(qz6jd)atMY}q(~]V6' );
define( 'SECURE_AUTH_KEY',  'J{7Z-3{jC-(isDm{@WsJ ~/Zj2?}*T6M7X+UN~O>_MWCdJ1#_f83TXkZK=h2MW*>' );
define( 'LOGGED_IN_KEY',    '|cd;[2g}3].V)g*T(y9~1oiJJ7k*zJ&wPz]:^1g :})&`ni(w)`, mZxV,jY7<t7' );
define( 'NONCE_KEY',        '^7vo*=cmIt}@?s.>@>+:^DJNCamASC669^&xj,Q!5ggx[>vQ,q@$eoveI1M@t?I7' );
define( 'AUTH_SALT',        'tJM!dDrfa57uCZ~uxiUqj&^<MXLK)A<ymRk#,*1B6^Iq/H]N[e7$^^vFF&t0Z&+0' );
define( 'SECURE_AUTH_SALT', ';oecxN w!m=~5S9OYKe7a}ZBQx(%{7Qim4dX~&@Q~gUuxpDTNF/,QmuG}mhIYd1g' );
define( 'LOGGED_IN_SALT',   '*K,smjk[:mJ)&tY}5ap,p]4==F}x#L?lhW>czrSanBvE/IHZT^8r26i.G3l~A6N6' );
define( 'NONCE_SALT',       '^%X2eJpWSf<?cDP7~yF?D):z,s8,&0Thl4Ib.)t?t^1HTk=UdbE*vy!vR&iP}M=A' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
