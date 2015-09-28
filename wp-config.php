<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lingerieshowforum');

/** MySQL database username */
define('DB_USER', 'lingeriesf');

/** MySQL database password */
define('DB_PASSWORD', '8VMGLH6aPt');

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
define('AUTH_KEY',         '{!b.h{8hc?FAy}-O[GA8n|i?Jn+Yi.q2?P&6R%uv-{A=}L&|;>Z4Mq?mHP5MEyol');
define('SECURE_AUTH_KEY',  '/3pHV[U[tCSOkM=}lamj&l|#>VkHYK;|aB>w{E|,Z:LbIM9ObBqZFm@<(~H.yr|Z');
define('LOGGED_IN_KEY',    'Xn(d?%nYdO]LAs9^N|w6/$/]sD;{xT+llJ#p_yjG:eW%fKDT,oVH>+PdKIF6dYt(');
define('NONCE_KEY',        'eCv6_twZ@FuapyB#t.G(u^ILA[->-:-l0W_$38]z2.t3M-jyPen%6F]xxKOAat+<');
define('AUTH_SALT',        '_AshVC@~IwZ[=uWq5z-n7U$>hBI05O-W-(6ae+fgIMf`T{Axd5.trVMDE1qWk 0s');
define('SECURE_AUTH_SALT', 'qq+K)Wsd_|CqUNqRTM<_4kfIHQS)`uq<Kg<Rv:|Nt/aW|q(s|_(Jd9PHJ7pQ.JbK');
define('LOGGED_IN_SALT',   ')-=kmM5y*{e+P-Q7<46w<J5Fly8b1-UR/~u9o|2FY1s<7/-ww4{y[Z-*dL2MUod]');
define('NONCE_SALT',       'MeefZ9|F7k)IXf1>>1&kT(aG]H_YGQQkPT%kt%@~hg3nhq.yS 1q5^G-+(^1n-1#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
