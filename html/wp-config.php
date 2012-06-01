<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_charney');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^?Mv+ls9~gf/R)P*ON+r+_:zWKB}.[i<xqc{f)LjX_&zqKm/ki8[yL=LG6]hgaH$');
define('SECURE_AUTH_KEY',  'N#+qMs_BQwl/o-Z$GOkItP!p|l-TL|D<2y1=z_KVM|+X*)KzVTqI8W@~6QL-p6D+');
define('LOGGED_IN_KEY',    '}h=y^)cnk$;$0i@jAG@P{r8pB<!A;L{m]Q$E<v0X!:R|Dl.j-Gv_2k`/jPd0|_{E');
define('NONCE_KEY',        '<|Za=wBi.{qtVv%M+-!mt^yMb[+lNeaRvo!{|G8E;iiI#/oR*z<#sPWl$IX>69z/');
define('AUTH_SALT',        'a2eK!^k :& Oq_M/sigkh.a8]_|SF+n+2aHIYxaZz$X9QF!xAEeF1=3/`VZX9|*V');
define('SECURE_AUTH_SALT', 'ST`+m}8#_|U|C6Yd=v1Xy+DcDu|@wgSr}BMJ-;`+ ~]UR0b6Bl.|L<K-Jh|[|I$9');
define('LOGGED_IN_SALT',   't]Ca}M%ODE6k<hGc#3u|Jp{r?W-7klY:MI`r.L,-siPG[AiQW{jg|9IuwX1T=F+/');
define('NONCE_SALT',       '<EgzxY3?nq/am?)+-/u$G2{W#~I`f)e m*(<Nb%Tq+N)^d*3Ug_:HdO+bv4q7&Rc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
