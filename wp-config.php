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
define('DB_NAME', 'wp_Peacock');

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
define('AUTH_KEY',         'S_6C ?oD^^`N1x~|r+_!e9x5IE{S,8)zJcH:5vZi|-Y=fwfiSp]r?~$;>Gdx8NRG');
define('SECURE_AUTH_KEY',  'Wj#}_-h=anqp;$]#`Z^ExxJ5+72=zv;fAx.xY:% bM{by7eX$DNk[Z54WEz}#&1N');
define('LOGGED_IN_KEY',    '3q)^wc9`Q:PwSG7z~xgIS{r4K_s3ZC}vUL3MtLEpLCL$;)KJ4 RI+r^,1w4uK=fP');
define('NONCE_KEY',        ',zA?`iquxDG},V9^@.42n+[G3EDQ5K-Z`f`ylgmW)!>]CBvZGZ)7(+W{iJi9uQ=x');
define('AUTH_SALT',        'Y,!Q6,dsI44%C0ZXYJ<x; zjR{H`Fi_uv7-dORiU<Ehp~19||>p{IpQgx]])lSao');
define('SECURE_AUTH_SALT', 'RTGa![-I~+HTg$1[|Q^!6I(sF)dGCy[C}f!@#ea7u5S1Fk97Ah&!/^iz6r=3?4t<');
define('LOGGED_IN_SALT',   '?U]%$H8lyGE/piaTVx@0R~<Yj`JL&Bt0].^`b.v*rjOr#q?KJU5LfT^/+L_]3}gw');
define('NONCE_SALT',       'utdnH14@QM0#lLI*C]CD?cY%yM o!FVM59rZu=J5fguxw<@9H`rEN}gw{+!4A1 7');

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
define("FS_METHOD", "direct");

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
