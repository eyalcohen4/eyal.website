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
define('DB_NAME', 'opstuden_eyal-website');

/** MySQL database username */
define('DB_USER', 'opstuden_admin');

/** MySQL database password */
define('DB_PASSWORD', '_Rq9POHT1ip~');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'oCNLF,hN%J+?|=,Ym$U*uVS2X_|*wRZ FKa2>jYEEeCK389zgjDOglX7l|]jO]I^');
define('SECURE_AUTH_KEY',  '5SA=?zWp0v,-T@Uib!u,j&lQmK>M0O<&+0eebIcZ-Y2 m2F|[-oCMdv)$opW]2oE');
define('LOGGED_IN_KEY',    'R8D20K-+ci+!xVO2hGaJV7RU9<l3cl9>XU;$^<)oXcnc[q-l2C+f9@:qmkgR-K-,');
define('NONCE_KEY',        'YI|j0@s}c]%a1:rfG2 6oN.M)||{c,-og-@`M+$a^QA1X}*fH|ot+P+Sfhb&R,tM');
define('AUTH_SALT',        '0C#%!?$5#|1V+f0hK-(deri).=$[~wU@cc=eA_p|!f!klEfYkn$%[vlCQ},+e8.,');
define('SECURE_AUTH_SALT', 'X|[F=4Fe#1S#2p5C{f3S#BO9jzR9Ix_F0>d|Z@U$Fv,_g?@6OsAFaZ$.~oE*;uJj');
define('LOGGED_IN_SALT',   'CJq6saaR8p}7-$3izBYc.+c,),%?KvUfgsIb9-5[3etkH+xNgR&}*Y+>eeCeJ#p)');
define('NONCE_SALT',       '>>.&4n{Q8,rYMX-`0K|P_YI4Wcc|T~/+N6t[pK|)gW]6prZ!iAX-7h$l]bdB]%$]');

define( ‘SCRIPT_DEBUG’, true );
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



/** Sets HTTPS for assets **/
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
