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
define( 'DB_NAME', 'fareesa' );

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
define( 'AUTH_KEY',         '6[Fo~2cE[H$d-d`YqLX~z?@LfdcwYk`]DwM|]oI5fPY{Zl3lp4h@LXCc}CLg)*T2' );
define( 'SECURE_AUTH_KEY',  'sY-u-i}^}q[M?QEDT#q^.Q?YhG@?Ozh<d,FmP0gJeQh6]D,1b]|4K1k1>l{.T?5N' );
define( 'LOGGED_IN_KEY',    's}$QDN)tEI!2umyYNzDO`g!r7t)e{=ylqqKEO3M5s|a9%zjSd`T8X zP2a#aF<~9' );
define( 'NONCE_KEY',        ':S5-Bbq x!I,Z&MBd14(75ECbg$My.#D3:R(c-7kJb&Ep24%JRy:B![T|Mt(1e;w' );
define( 'AUTH_SALT',        '=Sudaj[6eBdD/<%Z)1`e+Wnf~INoj/`f>@lg^pYH?TX.{{yBF>n@UY_4M6K-S6hH' );
define( 'SECURE_AUTH_SALT', '^%q^i3)bgm ;}_T*z]?6LxqVCzPr!+[Kn0xA-2){m_b-5{F5 5x!?.AX#!-di8/b' );
define( 'LOGGED_IN_SALT',   'j# ngHeN]5KsLFDY^%tU3Rv}~@UFB*(rc0,rtH4A*.pUT6p yG9@zPE}Z). x>B?' );
define( 'NONCE_SALT',       'gr~7&i%9`&:v{9aS.Z2@j|i{=+18jB$I7DQa4d3NB*MUg}PW@&f!iF::T[]jv9)N' );

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
