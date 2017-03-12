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
define('AUTH_KEY', 'YG;SZ&n;K+?qujeST[GwJ(*VvX-FdkPWu(R/;&R@POBy_V&iIswM/VVTjJxCeS)H&f)+DkMjGBl[>u+MFtPomIs|R>Q^*C}XTCov]{<!c)s-oTj(/nMls%hdjs)eMtct');
define('SECURE_AUTH_KEY', 'EpzGInolsp(OfjjjJqOeYeURr@$/a))PI+IZBis_X!s>yjUJJ!+NQwO!%WmpKCC-)^}r$A&D_lrS<DJ|+-N|r+dE}q[@Q%FLQOYEH|NJ!-/E=VHgb%A*XRL$%)xSGG^|');
define('LOGGED_IN_KEY', 'iufbtlXXZj^-t}]jA!a!l&OIGh/j!sTsS)O*+s$s!+Y%fn?Mi_+dGhQ$@}mVa;]ft*@sNBWUGsUkj-)BG?tJC<Hbk}M_EuW?cE$&Cz*XKXe}WbEZ)bO(wNyV|hWIU+vb');
define('NONCE_KEY', 'S+bE?GN+M-lFBlW@Y>Bg}&wa+QXNG+wNRPei)H-P{H>!b]esg;Ym)GD[+B(;oLxlL?mZ>BW+DHGbz{!Vdkr$xN[]=XZODVXtxE;cpSvFo|@JjibhCCLgoUdvALHw]w-S');
define('AUTH_SALT', '+ZD/WX_rkY)sVFD^<NU=!leJW&j?SSjau}jAWC[?Bkm>*[UM-mjRIy@sGxRN^[<RbKp)otPruaP%pDxhy<!f@aa<*{yC}?&a?SA)VRoC?e?z-Q%%q+WyGOg!/rfSURGS');
define('SECURE_AUTH_SALT', 'H$yAfcdcV?Mxb?IM{h%kld(Jnd_Ja>RTBHVr-a()zjtjaha@_Wc>>+nWSe@mSOBnfHBh$BUkbuoeznVI@m]xSgGgzSH?!{b;E/(<>T-X)lqK>&$HUYEv%IhT&OD!ij]q');
define('LOGGED_IN_SALT', '@boYfN;X%^J/l(e>([^Y/x;A-)euvSuagTTnj_<^A{pw]mXR^eEFdG((iRy_Zl%*s/OINCdWC=-DV-^/--a_[*r/mNGkBANaApUnQyM@GBDS&AR|g?&P$SaOiH/r?|lV');
define('NONCE_SALT', 'LIldf&RU}yj+|XuOQ=JbbvgT|XVR{FSmN&;&^AlmAUb[d]kcMEiLIE!L>ibh;QMGG^PrJcHs&-PDtx(sKO)l_M)nx[xda$&X[+ILr}=Eh%!hfr?^f^DRSymd^bs}k@dH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mkkz_';

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
