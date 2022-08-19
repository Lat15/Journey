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
define( 'AUTH_KEY',         'et|=<#G)Q--}(t|S~~icP[><7;!ADd+4In[28,:i|WgP+n^*$j$HH&]J7Nzb5=%1' );
define( 'SECURE_AUTH_KEY',  '&F*q[24lu91h mWO<]D%zQ)|S?X]A)4zHlS]D4g<B+.]&qXQ!Wb@nJ:fXadH4WMH' );
define( 'LOGGED_IN_KEY',    '))2xNeMj77mGzCHD41Z;PE)]V2A_=[k+Z1?B[jWMrL{~Y6&B+cJ,Y!Xe(~:c6+QG' );
define( 'NONCE_KEY',        'c=:.sWk(ogTdy<Ci_DR7EHPy`e65Fyus,ZB3pLl9UR4BFU)^4q,3I!45R! C8dvj' );
define( 'AUTH_SALT',        'iob9<l0>woQnLzaNP?QLjjVHsCT=N xL:5;n,*w[e}gRAAvSq2:so(,23reow> e' );
define( 'SECURE_AUTH_SALT', '0mE>)jOJ=98@5TV#WLQ#Mz#A^M2tla<c>s<<dhyg:,JJU4[KBy1qcdGPuUe|c3~[' );
define( 'LOGGED_IN_SALT',   '<MFfNFp%+oRz(E6C{N^6b+!Yva<5v<hXHTmNhkwG)Gk2n7@aH~Uq|~6x*{O89[zT' );
define( 'NONCE_SALT',       'XevMr4qIBy&3tA%Na^bPW=4| S[}npM-fO[2oD[v4;R7JVEj1GkM6df[zfy1;:k~' );

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
