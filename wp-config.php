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
define( 'DB_NAME', 'labb2' );

/** Database username */
define( 'DB_USER', 'labb2' );

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
define( 'AUTH_KEY',         '+buwxL$<DsQqBB-7tg)7R;_0w`K _nhuj@TvXXym<lv/!_$3`T:L}n9liG4SA;wP' );
define( 'SECURE_AUTH_KEY',  'I^%yCsi>BZ_Fwy2.RdU/XTXyO=XbtoL/?[a6B5cRWfNho;rVhOx##bg,N21+1S3_' );
define( 'LOGGED_IN_KEY',    'b6}jmxA0_B[>q%bNv]etlJB/ohfC8&6hE.9L()=&@3/h9vY]!u$MhP5UG7$s:#1Z' );
define( 'NONCE_KEY',        'cP_3qFK9Pfv_&$9x>0K44jObK2fB]CkGpo#lLT&95uwMt*,$lF0jv|cJSDQLivZc' );
define( 'AUTH_SALT',        'HwUHK/,TsY%HF(|$Qp#<p>?~n<f>loSy@+*S$>PT}g[/QYFkKs!xCHlU?ZV@S6/!' );
define( 'SECURE_AUTH_SALT', '^UBG{kxF`xuP[tZx!:ZXF0x-[=zUjF]1$y5f)6+uub`)G?m<_Q&n{;d(SjUaTS2~' );
define( 'LOGGED_IN_SALT',   '@bv<DPQ3(OFGUD*CBL- qORGM<vX|LCm2emV[5P8F/9] 27X~|4!ntL[:C/ocj4s' );
define( 'NONCE_SALT',       'Q*{k}G?l D^-0>8SUN4AjO3SR`;Og(9zy^N<PIu0.  S$XTmrB(0yt:i!7uJWuob' );

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
