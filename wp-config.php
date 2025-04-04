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
define( 'DB_NAME', 'db_coffee-interview-task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=,M^Y[f^fO&7K;MoNw-lAm{D=,Yu%r5E*T7IAZPIiow,a>1S`7,JJ.a;`-K0I)gV' );
define( 'SECURE_AUTH_KEY',  'QeD+SM[h.YQ?,$H0NLG}OQ<zRy+0dOV#nRzq} RzO}R90I5pP6mRFblcyT:N:-5A' );
define( 'LOGGED_IN_KEY',    'NLi#bb[zs&,7`CJ6G[@Z&2e&n(cXoS4G`&&h-j0s2]A{lmKDrD]0^]LgdC-`Skmv' );
define( 'NONCE_KEY',        '>?4b&2C9q9lyg}R]t>B[2#9=h9O2~;!_d>X,PE-TS9*,TtiJEBw:AM+j0l>]xu1g' );
define( 'AUTH_SALT',        'o#{ecYOema5`AV:72,~w` /#VP89!w6fRe*BE-Yiko)u{$/T:,qz3rU_l?-Oby>M' );
define( 'SECURE_AUTH_SALT', 'OvT_Qzcb#6G4Bm^%5>m4YG#dp&J*i=1AFR/2N6&}q3/4b04+W5r>CG++;7C:TJJf' );
define( 'LOGGED_IN_SALT',   '#oEZ&d,C4_T/ y=zce+,r<)dseJ%FJGY-lv|xcJ=3%!-{R -.Sft3J3zVoT/[O.J' );
define( 'NONCE_SALT',       '85TzA4W`y-LLM*Cq{sq-XC:92;,)Hu6|sV]-0QI7}TaV)E[1j_AxtR=a8qK<vnj6' );

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
