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
define( 'DB_NAME', 'nourriture' );

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
define( 'AUTH_KEY',         'ITjZ;<Ye=2[oSZZGWP $!4f>inFQhmvlfNR1,MjUl,|4}jatkR2OsCha0jDx|Xe1' );
define( 'SECURE_AUTH_KEY',  ',N$+~r.gaAc M+kN1N!IyfCD(d&PB7Kln`&Dg(FYtaU8m}uu+sX{<B,Zj{YCvAED' );
define( 'LOGGED_IN_KEY',    ']10_.7nd58L@8)u,yO@([YQM*yjL!HB{%]tXDTh0z+OSPP[Ng-b_2;1oQ3S<smEx' );
define( 'NONCE_KEY',        '1eZYv 0&#Mp?cYD6N$kcc>?hJ3nI:RKwHg^02BYX/-9f+S6tI0O:Gej>J:1kfX<8' );
define( 'AUTH_SALT',        'kA})H#^?%&gvyHh;uvuHO4XOkp-ufp3;th}g15Dtw!ySB9k(9@>%=dpp?wapBJE}' );
define( 'SECURE_AUTH_SALT', '<sV%B)x |W66.ay92]p`v1:A$xvLtT6OSa(4 4Ni*O50d.c(eeMfJyM5@#:FC;)=' );
define( 'LOGGED_IN_SALT',   'uG@?rHrN<Z;I50[YoL6b(_8N$cQrF=M= /(nE}Zzfr%l1-|HhJ7Y},R&}S*E5G6(' );
define( 'NONCE_SALT',       ')dbOE ]M31l|`$/uk1}j9Bz](5VM_HP-j7*t]qY.|z|!0j2Jx[^,GfAo**px4!S~' );

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
