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
define( 'DB_NAME', 'raza' );

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
define( 'AUTH_KEY',         'vqW44N-ai9VK_d}vb<Jj!y63(Fjf7nv*==jW^=X?`o,VdNb^o}-#m6^P=p[=c@Pw' );
define( 'SECURE_AUTH_KEY',  'Kf;/xr$]~ =xm&NhRyDoX`l3otVhZOhNnY%#poDWy[|N&jd8.7;dS!g%0%(0F7&D' );
define( 'LOGGED_IN_KEY',    '7E&s6fu!?cI<nHnu%&<M*fCF%A;F{z&D9IWClh:3OGfgd=}pP0LSph0y9/w^_GD2' );
define( 'NONCE_KEY',        'rq:~S2a(>}xiPb{ArPt3u#$%@XP{ei!Nh)0#G6Sw@}2zEnmf:z{cU#)MZ.ml3X/:' );
define( 'AUTH_SALT',        '<z,?8V/#ua5Ix9}8@ngDz]m7M IFfSR~vO|2DI2sL@r&*L]~j7CXTbru.1VH.eFw' );
define( 'SECURE_AUTH_SALT', 'hfhJ3f,mFSk>)vB?mP>H/_INBqHH(@*=5 <jokpV*15~uQKlGq1>,gg{K=@D_Ca[' );
define( 'LOGGED_IN_SALT',   ':+qh}*%_<?QFFmsn`x0!T.Q=Yr3s?QDDoRjkw!HD6b7AY-W0kMVEr[JiD}]v31s<' );
define( 'NONCE_SALT',       '=t)+,8R+pHOX|GS,17FSUz#C%M{0:^cSLA+_MF)Hg#s%?&n#rS_^Tg wBVC_F<nQ' );

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
