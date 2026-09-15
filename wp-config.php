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
define( 'DB_NAME', getenv( 'DB_NAME', 'development' ) );

/** Database username */
define( 'DB_USER', getenv( 'DB_USER', 'root' ) );

/** Database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD', '' ) );

/** Database hostname */
define( 'DB_HOST', getenv( 'DB_HOST', 'localhost' ) );

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
define( 'AUTH_KEY',         '&gW.SS*ZbNSu+oc}%FzF[htpP>X{E],>c2SN}sfb$tmw$5$3+aw:5{7iScpY0Tl]' );
define( 'SECURE_AUTH_KEY',  '_T/R1e$J}lw0#uENfT_?>mKtTReUV@la[GULc.^o2s#}^->G/k%`nXAy8VTD7InB' );
define( 'LOGGED_IN_KEY',    'aE[ntdhAIl7!W`Y_-97sc2PuF=Nm?;*]O9Z&0c3Mi%r 8X*6KGO/i|/~DNDUam-d' );
define( 'NONCE_KEY',        'T#1ItcO<s}ZC^A$e7*n24OHqNrj4 #2_D24}/EI2YLOfjMCOMptSI1#GnA#HCdEn' );
define( 'AUTH_SALT',        '-KaNNI0lKhEv;^~?Sf?%i,N=: jI9%RhBV&<Dl5vz8zWF.c0y#v[Jx$}#2HTL}+D' );
define( 'SECURE_AUTH_SALT', 'g,Ka((6`d1]X;nrU#Fk(gf/,aAyKMIg;6Vn4Z;&XHd{hR`MCl9,ga/tR6eP,W~ao' );
define( 'LOGGED_IN_SALT',   '3.G7.Ccq?0u;NJ&k<=BE$hb b<D.RQ/@`DZT,aya.Q=jvRj?Oa~uN9J ,))M: 8r' );
define( 'NONCE_SALT',       '=Og2)Cs8DSe_nYQ ?LJAj<1N|Tyaz[gIk}(Up&Vf?RJ^<v@XpEIVznWO62uUvmno' );

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

/* Render / Aiven production settings. */
if ( getenv( 'RENDER', '' ) ) {
    define( 'FORCE_SSL_ADMIN', true );
    define( 'WP_HOME', 'https://' . ( $_SERVER['HTTP_HOST'] ?? '' ) );
    define( 'WP_SITEURL', 'https://' . ( $_SERVER['HTTP_HOST'] ?? '' ) );
}
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
