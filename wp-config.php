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
define('DB_NAME', 'reggalato');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';M>E|@#SY}-Q|kR3XIz&!+;@7^/36d8[idl:Tq.+[ef,w;AaDOc2j-.0 nF>AuAM');
define('SECURE_AUTH_KEY',  'wWgsLc&1TcA5k13`aK:B@6Xsmj14YABKlL)r=/E9C5/XobBDa3/)(7:DgGq|q>]2');
define('LOGGED_IN_KEY',    '~})^PcAk7I%.8N`} 0<]5tsc,9#sCyI*`x<gb+R?^6FnGo_q;uA1?W;@`^ix+TsP');
define('NONCE_KEY',        '^B=)n]l22gejb?p(,9FH8<N[,H)#Gu+rrFZ[QL4LO#iD9?`h-+K/+:a)S%O^O%|v');
define('AUTH_SALT',        '1PbhTD<d%`di_-l; q3uIjed/bs,A ~9;|{PlFWK{c>t6>L+k~|YaGn UE#-W^D0');
define('SECURE_AUTH_SALT', '6-5;yWJT8>,6/#ubsBRn=+!+;62v+1q$-+4;8NybA>/03Mud.<n9YGuO{__^n3tK');
define('LOGGED_IN_SALT',   '7g6rIqU|23Cx7eKl&a5y=6?Nq]N-e{3XP+rx-RsD;?Z>|P{+vcN3FbKmzsiyw+AS');
define('NONCE_SALT',       ',v|S#z4G3ouc5A<K{L&{t$o=F.O+9/|?n^9Cpy|$h]VYx,+VIn%D5sk72X_hmqIp');

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
