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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lemmebuyit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SpgViB&Zvl7KH{:Z6;T:xHvBs,g}SEex@8ujeqrbiGuYW6c{Eq=:uHq7rlZ`g?jE');
define('SECURE_AUTH_KEY',  '6)X~(GI(k+k&v+Q1J$Y*LiS4Z!IsUL~1+WF)7}0-XM.IFh8R-=C_{7!hqj1LE6wH');
define('LOGGED_IN_KEY',    'NZ3GmePq&*2nT99oi`,^y!}~gi(#BhKAfvxUyN{NUX5M <Y:,e2^Zp+|6W8e=+jH');
define('NONCE_KEY',        '%t?AbROaf*X>b~[vnU}:BbGwy;?#@O,(6I0Zo%|n|iD$9n+rz9!@_yCy{2}us/v+');
define('AUTH_SALT',        'H#hm>BlRGZ23-ib5IEi$2;=Uk|NSsS6/@Y6u5b&2XSBe|i!)UI|OA,Ejwg=/f-6)');
define('SECURE_AUTH_SALT', ';^J*T/: FtNXG>W:U3nJFMS:3W{ 3`U}}4Zn,=l@P$i|s*X_E]gQ3!W}3P:CTl6;');
define('LOGGED_IN_SALT',   '0y{-VUo1IuY[AHT/}k>QD<ZPSw?3*,)>G8smbT{*#=<lN&JpQk#f3 uc2pZ=;;t ');
define('NONCE_SALT',       '}70s)[m-(#_Za/g;!JQM#35- m(}rd^ScIGHECH~-Je-gN9454,dIK:Z={$bySrF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
