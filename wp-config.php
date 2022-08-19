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
define( 'DB_NAME', 'journey_db' );

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
define( 'AUTH_KEY',         '8m9q/ Mg=tH7C.dc3sxs&rRJbwa/*oUB%3$1XhFSOjz9^=l QGLL:9>i6o i7gZx' );
define( 'SECURE_AUTH_KEY',  'UFBgV1+H3*bd}m,t 6yh_>2YIh1pvU{+0bb^j.OiBVl*Nv`]9jH>18TI/cmY#]xi' );
define( 'LOGGED_IN_KEY',    'wx5)`Dqkw>wjIc.SA6ifk#=Z)K6;Rou$cPq}7/M3$_:v6<&FR!^++xYLVna)K[2(' );
define( 'NONCE_KEY',        '>5Yk |ES$sq%sceNZp8h`h9urn#^WJ/>WDX^O+gRDmzZG$cd-kp2D{$x0aJ$pvx$' );
define( 'AUTH_SALT',        '6Lb(gyKf6_25~GG D=L&1`v,|Gb!$NtS<M+.Mx{]Z%$wXY$E|]yGpPH6;v!Ds.a~' );
define( 'SECURE_AUTH_SALT', 'JjnU.i,yZU#6axJ]8~W)N(KI=Oou^awwGGO!y~vc+6{S+%,806|LAyjpkvf(qYFf' );
define( 'LOGGED_IN_SALT',   '.a[Z)xdCR30B|ozy]kKY_~yipXS`a6tF+YDO;&QS[!@4<=5[CY8Q]6PMR8kd9YD ' );
define( 'NONCE_SALT',       'TK$GJ{2JG#&gDmY:C?4IRI~zI!Azg^pr{6@Z%dEZSnNO]xUjGyRzjfo*rVuO(x#x' );

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
