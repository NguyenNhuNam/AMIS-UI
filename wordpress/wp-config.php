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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'o}T6a[# {E|^?dtb4HwQ/71~7WjlMOdTYc6(>Z&}$oWv-<NN1X.0os.(,],rB&H1' );
define( 'SECURE_AUTH_KEY',  ']7%]dD;=Nb)B9VI(%k%yHMkqlq/Ch1BaV))>P;bQDz)8^EP>[CHxIj3#0:2{n#N>' );
define( 'LOGGED_IN_KEY',    'bZlIvw:Y,B+oz|Yi!<H1/9NekFcMkIEOXPDr=KLYdtNaz7<LJ8N&|v}hzpPmTf;>' );
define( 'NONCE_KEY',        '(D[m2SQsk><U+bjg74V`0u)GpuQanKw:k.<X{sXw.?iyB:M)b}Jz$P3-,U#&W .b' );
define( 'AUTH_SALT',        'wZU1|BT8;cRP:HZj?SAkSVpLjnP%#aP5)vf_se22;Vlo.+;cur |iC:+W2g%G{De' );
define( 'SECURE_AUTH_SALT', 'Gb1EM2AO-1aXFpAXdE-sh[~r?DvW~T@{uSs!#te&pR{+_<kz/^X6D;v0$>|R(|Ly' );
define( 'LOGGED_IN_SALT',   '$wzbu%OAr`C_B 8Z8!%Qihu)=@oIoIGM6^9c)v z{^{CIw<i,%1i^>[bdy_MDWv-' );
define( 'NONCE_SALT',       '|tgDQ;!t/u4ycwv>h(AxN=6-/02|Hc`6HRK~s!63LJik@B%aY6?V3Q9wGSO+@~7c' );

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
define( 'WP_DEBUG', true );
define('SAVEQUERIES', true );
define('WP_DEBUG_LOG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
