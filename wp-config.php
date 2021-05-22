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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '_=5JU@ucOUE20JsHLs^7&?9+?`(O{lCr;8B^Y$UT9GE2=Hr$&ubyR$7Im/8%ri2[' );
define( 'SECURE_AUTH_KEY',  '.;^apBe^PQAB:0UXlDcY.UrmvNlOsc`^KvUWR@[y!bzpb10KJ0!L8,lra0<BD6,f' );
define( 'LOGGED_IN_KEY',    'y<,6|S;DtQko%0;7B!}?Kr25/hCj%a#:Gml<3_U/5o8zW^&*+3Y@SP`Z@v;+IX<B' );
define( 'NONCE_KEY',        'MmDzc/&.A4IKqLJf_>8o`[[Wof/I%oE=1(uMM*R~?/|CRK4g3AD:)3ES%P^4GOM2' );
define( 'AUTH_SALT',        ' 1hzNM)o)CK|lQHMRQn6],-r[}hk:r{%]28i&F[I#MWFcC~Z>%Vo!8bn42BfB/nd' );
define( 'SECURE_AUTH_SALT', 'yU2v(>>_lD}r$GS#h$I9q/6p5G-@wqp=[x]!UTm9Z.y7,~ VqNeqs-Z@z@nNi7nF' );
define( 'LOGGED_IN_SALT',   'k]0KL52u)*pe*nZ20F*CFz/!Q-GTfL[3+_1l0fp*/}7g:lv+N$r{2{1+~SUrvAu[' );
define( 'NONCE_SALT',       'CcFXTrlBB.N-bL;%(d&dzVN%uy0vJa0o%1_Ky$yB P}p>BK]^X`n+az.fUV*Wep/' );

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
