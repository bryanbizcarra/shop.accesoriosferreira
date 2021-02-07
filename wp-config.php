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
define( 'DB_NAME', 'accesorios_ferreira' );

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
define( 'AUTH_KEY',         '-K?vTh.2 nk&Q71jIF^n^0}}`B<VOQmu_:t%`Nrcc7:6D/0lCh7a` +QfJ[2%`cH' );
define( 'SECURE_AUTH_KEY',  ':zR,?^CQxiBcx/6DB{|Wj(({<HEQWUeLk(7C[z!R+39J9PI/31BcBc7)_3TH84M ' );
define( 'LOGGED_IN_KEY',    '?LK.#MxJ8wL6v;;R~~[~bcm$;3{3DVqJd^SSoThv~TyMxzg!}J60:vuu&a.1Sn*R' );
define( 'NONCE_KEY',        'S(X[it-Xlo]z~,04O*1-*r%H ]X7wd?enc,1V~ YnKjCIOeV{K<j%l9N$>Tv&;RZ' );
define( 'AUTH_SALT',        'dsG`h^^||_>6#g)ey0e1D.^X>Bde9jE^IS69$`a6O`C6,KuB-K7yF<Vza11n6hIa' );
define( 'SECURE_AUTH_SALT', 'W0dFIF $T6]Z+ygIeEn>gN|6YwV6a&R8QpRa|!89b[;?B|:dl$a8*l/~(l:NZ_r@' );
define( 'LOGGED_IN_SALT',   '[AP,B3w()+;u`,)ROd2bov>#aGP&#ciZXoQ,Qag?V<,&0s#jt5rG?|5 U,e7)B13' );
define( 'NONCE_SALT',       'sQH81e?<Vlxf+E,{5z].P=-l?YW=rI1~&y`0cs&r>s2$4>w>c|exQ,pcM8pMuPIt' );

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
