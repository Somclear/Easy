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
define( 'DB_NAME', 'easy_db' );

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
define( 'AUTH_KEY',         '4}CCDu85sx&Un}u6j~NSR4H19Feh93CGju{G<*O>8N^%h7H,Y|n;H~UYM~ziV0p~' );
define( 'SECURE_AUTH_KEY',  ':~*]ww[Z( 4}4B@c_.&Hr#jEm9Ab%uFJV@Gg!A0M.YEk6_(<K1Hz9 r!Mne//>qe' );
define( 'LOGGED_IN_KEY',    '$H{TKduOJa-AvL`GrBxB,1U-X|3:2HL*A~{rEB]D3~a:N]AGFnNt1K$$Tru=e{1>' );
define( 'NONCE_KEY',        './ YQO(!-ITQdb~1@~Wk&B3G16kh{e(!X4}yd/)IUd2P.o+X0w9dS69GXFOs|;!;' );
define( 'AUTH_SALT',        'prLwdZ_Xi/b9T/M tlLGv,MS)9*EQPT+7/$#yB.$~O^|&G7M?r4|18oVi+AOpaas' );
define( 'SECURE_AUTH_SALT', 'sq^89.wV1WR-f5Tny{tZ5i.%V9I)(r,B%ywE{kA^=[HFA5O^6aaF0uoIHn,*|0%9' );
define( 'LOGGED_IN_SALT',   'i?-_lD)bUw(n~+6|/Pe$9c7A$77y8aiX`e0F2Dk{9k8$4u2n@2Y/%Szg(i*G<rRO' );
define( 'NONCE_SALT',       'frnKvnUb|Ad23NT)xZhu$-9#%[mUM1Tn=pV:OR<LnMYO?kX-h9N/h!8{7}X<~dys' );

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
