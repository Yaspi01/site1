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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         '<*:9IQrl8dZ+G?h<#jA_j]*>9$KOFvw/w&BCkU),xCZ4:2Vot)kQ%j0jVi_+=8>}' );
define( 'SECURE_AUTH_KEY',  'ER|H>=) VQ3JSJ?2vUpZLQFhr!2f|9z9kP=U%}GUe8syg9L+4vD(`)IsS8a)^H%K' );
define( 'LOGGED_IN_KEY',    '4*sNer[F&`x-Sj4M<,gybA9vWbT`K{q%Z6Ky,n:>OM)u]iAg5/ #&#3`6kOYG_$%' );
define( 'NONCE_KEY',        'b[+[yBbF^W@[bSxkLY>+0 4#9a{):&Km_KIM;sBJ.-OsM//HK8*km|| j L;T[rE' );
define( 'AUTH_SALT',        'L<$jGXGIBd *y!Be3u vw`0bj[h! f6vW~`3<6R+~#qk}dtO1znl0v)5M`[TsQU4' );
define( 'SECURE_AUTH_SALT', 'IdDH8XJ>az-#0eB8:YyzRXjOGu:BX,]|23tcdvqLr-Ec%+U3v=P6x9I]@(*$*(LZ' );
define( 'LOGGED_IN_SALT',   '5(l)M{C%o<&slnh l9z#3+zu.-q$Ad`Z1YFR%G<=a2n^{gQz=m^-1GpapWYplO!H' );
define( 'NONCE_SALT',       '|OPfB@2r[&;D@satLX%GmH2#pG@^jg9G,r,TIX9UkR<Dt|:t(Gr-U_gO-N|tT0L@' );

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
