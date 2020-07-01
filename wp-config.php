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
define( 'DB_NAME', 'testgit_db' );

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
define( 'AUTH_KEY',         'pr3b76|094+PdNKjvS/p~MIOReP51] {=XdxSA_^k@Rh5ve7y?a$T*eB@xZ=u:9e' );
define( 'SECURE_AUTH_KEY',  'L#Z([m6[C8hrE>?8(0D!.S@O?0l-e,R7[{Nks6TsvVuFwY<Rf/ljiC=V]lVQS5:6' );
define( 'LOGGED_IN_KEY',    's,(&gX@}?Ah@*B-Y*3MVKBjA*.-?r_WDk<9jtl^ t/sebH]_%z|feE|3@D6f&Kqt' );
define( 'NONCE_KEY',        '~0,Ai=sFD{2vbuU3ILJ# 11uCr_h!hcWfhdk>V`;j([,:NhabLIV91{4#,)5=V_V' );
define( 'AUTH_SALT',        'np2,`a@pj<t44eGQV3u3&Sgq@2LxJcgW,*5QU{~A>jD-%( 7*1!nghC$+R<d:|q|' );
define( 'SECURE_AUTH_SALT', '@|h13ytc$R!IA](c2.E=xa$l!f1y;Ys*i<!Z**!k)-yc%(sFpOzG4rm|[pH=@hub' );
define( 'LOGGED_IN_SALT',   'nh|Dbt%C2o[P3Lf>hX6nSA8KbZjl_ B+aPA*!-^zm$.I#[9OJzna.W<6fGLO3q<6' );
define( 'NONCE_SALT',       ')`r:|Kcp/b}<oQ|q`9lxb00N=zU6`bj<4N8nC(e&A59p)w[u/lapHfY~7qcZ;~ /' );

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
