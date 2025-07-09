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
define( 'DB_NAME', 'webdata' );

/** Database username */
define( 'DB_USER', 'webuser' );

/** Database password */
define( 'DB_PASSWORD', 'Quickflow@2025' );

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
define( 'AUTH_KEY',         'm~K/Am<[9vRUC%Vo2Z{ dr:S([Y]R$H_* B,F.HB;,$hyfm,*gSV0xWr]_)1VcEM' );
define( 'SECURE_AUTH_KEY',  '+;9u.E=(@z_h7J`DJg0XjdJEUzNA(  $_(SjTNv`9MEEa5<7^kScZYbSYD:^vrLs' );
define( 'LOGGED_IN_KEY',    '[dg%D?;Gw+0v.C]m3S[ifj~=jAcRd2g?PLi  (5e+Znk]zvbMWZ.]*=9 q/CwyMS' );
define( 'NONCE_KEY',        '9&:L([bYtfJ/@V#zy&&WL`h=l&YHOEZZGrAicpUk(58O3ytbrx8OMN?4mT;H-sak' );
define( 'AUTH_SALT',        'Hv<fi!<iV6!.m$~/$mHdsd,g!2]:WpnN%5Wu1!XOBDYx`S#GcDv_x.A!~*1MI$H<' );
define( 'SECURE_AUTH_SALT', 's0Q&Oq|R!heYh5>(`!sxkOUG:6y#|}c,mA`!GDme#3PO8`]wl3_tKd=m4[Ajn=ys' );
define( 'LOGGED_IN_SALT',   'mw# K>z)(U@v(Z=<J]xZjO{mj_9|K&L9k+usFT_,2At*mU2WzELSF*b8=;}3kTR^' );
define( 'NONCE_SALT',       '5es1I-a([-9u4%(fD%~AEum[i?kGX8zo K.-p5c*)~I;P)p8R@5)BrmiiJ$@b5t_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
