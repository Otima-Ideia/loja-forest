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
define( 'DB_NAME', 'forestpa_loja' );

/** MySQL database username */
define( 'DB_USER', 'forestpa_loja' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mkt@2909' );

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
define( 'AUTH_KEY',         '`/XIE~#X9edQRw%2T}!pon5c/}::UpavKH)Ih/pgu*KUCohEZ@m(@Xec[[`dr0To' );
define( 'SECURE_AUTH_KEY',  'x[6uG7G{N8-#jj[{#a^%VF#O0DB&Rl9Uh0-g12U#jLFX %~{3qmIvc(rTc!4:_B4' );
define( 'LOGGED_IN_KEY',    '4&N{CHtB,!Edx3(()|%BFdluB[SM3qWJl5`yzTZ<+1G.UMGZ6,Z?j~ct+W6{Qo&G' );
define( 'NONCE_KEY',        ')?~2~Q]>&t{ZrQAU)!jnH?8[41%9h}6 XI>%j;`Lou/]9D|mG4+nuUTkIyKU]zWJ' );
define( 'AUTH_SALT',        'Cg{8-/06ZEED$PBl?)^!onqP//2~Bq{.08gs_X(3xy05V>YB|Vdjvt5]o_bJ|&z!' );
define( 'SECURE_AUTH_SALT', '|)jZ{kg@iZO+**.~[Vr7&3kN.SQQ~2nNh7vBU,5z8sg_46,Vxs0U[U%Mu^n|#FV]' );
define( 'LOGGED_IN_SALT',   'n; ]X<R7-LP$iZ<yAiKe?Kv<Q}ER9<auc^jQZ[*~O_5xQ`)dw<}6-Y =KiGzQD~Z' );
define( 'NONCE_SALT',       'V?$aG~e[2RwBXD$HIDg/G0mFJk7LJX?so#qW+o;pu!M;Zy!GGUs3]o.[n!aEq>&Q' );

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
