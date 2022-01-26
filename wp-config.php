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
define( 'DB_NAME', 'wp-blog-udemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'h-4OsiRng#pP8i[3D%TIlyX-7<hPaZb.6pY6f{j;LE1@@LA@_G=p0mG&IzO:>KR%' );
define( 'SECURE_AUTH_KEY',  'AO4u(qJqp-cK>T@!0B?N_<Fnx!Gu^l.4[9B}dv|q%Hf QSY3i24ZO]dH^+x(=M{9' );
define( 'LOGGED_IN_KEY',    '_b=H`3(ZjJ=C>U 3aPgh}FPoneDO|pK<XkaRaTp,@Z)!mxGvgsa+mgZ*W1OE[BlH' );
define( 'NONCE_KEY',        'jnk9nd.5q;@6cLq;_zI1`RiuA`omZ/P>i!Td7yVCYkf~!TLq$UCxCk3:?&8${F/n' );
define( 'AUTH_SALT',        '=@M|T~e5;|Z.e2ko#:`++=#`g@+E{^9qS*d;3C2G6g:knnp_%]gjHSYd&/qqe-]F' );
define( 'SECURE_AUTH_SALT', 'SZ;u@#@}o1o7t/.l*9kmp*I|OZ.Z4/_Js-%ZYn[ZQ`74/iOzih4Eu- tbp/c8R2v' );
define( 'LOGGED_IN_SALT',   '}W%#[eoDG6bgE68+1qSPN:B#8)q1E>+VCG2Dnk.MVOV3u`@:?qihsFZ-(=(GaH7c' );
define( 'NONCE_SALT',       'NLha^?7V4fz-aA2YC$vKS!=8KB/mS@`>Wg2w&:1dp$Jq)9aA]UHlc;-%zzC!h,&j' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
