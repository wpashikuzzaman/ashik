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
define( 'DB_NAME', 'ashik' );

/** Database username */
define( 'DB_USER', 'ashik' );

/** Database password */
define( 'DB_PASSWORD', 'ashik' );

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
define( 'AUTH_KEY',         'n}ZV FnQ`sS~}e!~7kM:hnsz +#5s>|KTuPFnhk)s2J4YzzikT2_cXl?U^SVZ_*j' );
define( 'SECURE_AUTH_KEY',  '/$d1H)cyMC#D;T.Ns~TphhTOFnZ/C|e<(jQJpzwB^yJT-Jp7T4<P5~+i]FY0X[xa' );
define( 'LOGGED_IN_KEY',    'KIjpFC%|nq$+5K.[,=s7~SYoK.81J2O/[i~X1~4V*d4wr_l~Qnjc.|X#=9-QmmID' );
define( 'NONCE_KEY',        '(?^-@6-y}|aYZDM*,eu2q({*j=g#p/[HAp!fgev68/.LzCDL0e$$,a~X$M8h#1-K' );
define( 'AUTH_SALT',        'p-/#Uc!1?=*m5)t14d0eq8Axl)Z~>)Gi{1=#GE/x!hkn9rJ0lDDl!hs!]PNmz0&n' );
define( 'SECURE_AUTH_SALT', '6vObxX~@AUr(,r?IB}.edZ/6Q/2~X%FxPp/]?t)=_RJ,)d%$!CRAZ,)UMkR$SN{*' );
define( 'LOGGED_IN_SALT',   'f8R$<=IaDjXFAerjx-3,#-GhsBe>fOzwtg1A%x]|FuH^+vdx`m&`Q{u3*1@_Fgz6' );
define( 'NONCE_SALT',       ',%M0-msGxPbtjo;PaEl6p28~)3%D!i~}hYgM;_u*;@I;Qk8_?`7B{`qL7*;5j^TQ' );

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
