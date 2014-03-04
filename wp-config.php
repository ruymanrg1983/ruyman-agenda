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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'e-=n][m)Wi:jK3J;:>F*8.m%GsnORm/)hn+q/~QmG;6;}~HEV)h6+)iv#|N??z$&');
define('SECURE_AUTH_KEY',  '6({8u4mHL:?O0DI&WP^8u:@cfaNK [^3dj.Yl7},|$7RYHvbO_oG->IbFoZwV.-S');
define('LOGGED_IN_KEY',    'Rvr,e3uSSi4Sz@V8:gl|fw%XB&.Fd I;&v)`LcTfyIhy0E.`A$jPDW9pK+5*GVzl');
define('NONCE_KEY',        '*`>qLB%IyX*}ag}u7R=z8(e8GZx1|}dpkPcCzJeb3$Kqn{60ao_YbzfuJ59OIEc6');
define('AUTH_SALT',        'k9!+-Y{= :4!,`kSTiN`I]j+)o!mM-(t+4-|};r5+{}0USi t&3~]tx(Ne17Z6Js');
define('SECURE_AUTH_SALT', '@%2|rU4A6n(V3xQA>tc|uIUs!EJ7B2N,ioF3w-k>k&PNJHYTHgJ_Y-]M0aXLqTn]');
define('LOGGED_IN_SALT',   'a]Va^,/5$sz280eNxL4J_DfN;t+P?c9c47)-}7$@7Y?U#`WQb@C33sfk^[-)c&pw');
define('NONCE_SALT',       'pOKX.wf/a&=]lF|=,Akf9rMv6=N?>p8Sy%PkOmP+8VMGh1jXM[dTcwCybcysiUg+');
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
