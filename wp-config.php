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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website_db' );

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
define( 'AUTH_KEY',         'E)bHbsALb]4T+k}ft8p?!zSFf5-RWk *H.hI:?IP9$J4DkE~%_>XFzVAWJW<b}y&' );
define( 'SECURE_AUTH_KEY',  'ak[ykUn(=R`T6zq0}=HZc*<+4G/h}Fimthy#=gYyB;(|NP,%mlHREOu9Al3.z0M+' );
define( 'LOGGED_IN_KEY',    '*$slIW=}e.:I(>z0D[A$S}v@Z3vRc5XMn0{$`6+IB|BUhgFTT9jzT(F=/4!0/)4X' );
define( 'NONCE_KEY',        '>zm`}y,@Pf^h.:*E!@E?4_09gX:VGN<FT<&_wF{B%z)hL<iI;Tx(<s9uk=(Gh*d:' );
define( 'AUTH_SALT',        '^}I!g{iT>FrdM*uZrs:tBW>$Al kjIxq_;1lNoi`8T<CWGHauJd*C@NlC^wmD/Ew' );
define( 'SECURE_AUTH_SALT', 'z$Hleqf^o;5IH# 1S3M#~0b3ph2FbX6K]BLat{t+,_5UZ$F?vc&8[!b; ^`1K7.F' );
define( 'LOGGED_IN_SALT',   'MS5hU!#x?F{Lzm&$~p42`<+RpN}ltE9Pg>5T!,BgVh5;.Zdgf{;8x@u7qG$_t:}?' );
define( 'NONCE_SALT',       '|Ye]l&tXm/yxOH;pHD@EQJx5jD;>xI#4i`&L#:H*?A3yTx9ckWiSe(T_G;&0#]k%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
