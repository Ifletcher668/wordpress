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
define( 'DB_NAME', 'classical_kings_test' );

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
define( 'AUTH_KEY',         'Rf^S6+q1>]b5/m1%40%ZopE+URBX*szcd%l!|L?p2jYp{ASsZYLK46-8ewxlCF%k' );
define( 'SECURE_AUTH_KEY',  '$uipv;->&/;=KON^m^B OtQ126{_D1&a)*!M~LN:9fj;bQU2a`[JZ[>RkR+pMNPl' );
define( 'LOGGED_IN_KEY',    'Dn*_oWVO=L:CYGw ^KTK((lm9mO&mt5@3Ydm&J8EwBMt3]VAA+x|X}De2<8xpCKA' );
define( 'NONCE_KEY',        '=Nj)j qdbYCMnG=D$8sIp>YEMLk60egC{%kc<QG@h46escY<//2|1cgqf:F|A>H:' );
define( 'AUTH_SALT',        'UN|1}I-N{@/ziT{o%3X>f:^ghOs JCWup-r87sMu{:N7`T]O[I`d5N@!*;tO>TUZ' );
define( 'SECURE_AUTH_SALT', 'fl|`m<^e-nx~PO#57X|ch$j&I9#LK^[ ajsX[r{]8=!%<G;Jfw`iTVMJt rpwD^y' );
define( 'LOGGED_IN_SALT',   '@{S[s_4F;)gG:<4!sp?Qb#>YzK)k[)..mzh=M20c!Jz^k4Hgu5<8OMrljoW=$X2j' );
define( 'NONCE_SALT',       ']K>)B7!auGQS^aib(k5DTt8P;`CSvD`Q1X}Z@C/2Dof@?lL0.GeRXfh*iOB=}Kb-' );

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
