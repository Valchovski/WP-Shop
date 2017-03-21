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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         ';(?|/AQ9YOH$_5#opfm?PF</|RG!Gc.ku_u!w0uC/fX%Ycffts{,ntFa 9>=kA||');
define('SECURE_AUTH_KEY',  'ZwzfTMXd_}q77a^4NY3|H< `9]03S6t{$?X>GD.!m<|<ygp$C#V_$`snx#CQK87W');
define('LOGGED_IN_KEY',    'jNqjtC,>9Rr?*~;^{`&1R2D PkZGO^,C1osZA]K8UvchAPw(R$ I0Y@u-]08HqcF');
define('NONCE_KEY',        '<<GyI7~+2)rrp24ro2vU{`(nY/m,g7.}f+E^}s Fdx_w}+%~F(d</Lu]J8p^k#}G');
define('AUTH_SALT',        'v(hC;!~!#T<-Uz9Dyz64INWLDzi)D<Z](@wasdZ1 h@G{OsS>8;O~e>=KA>SZ}!I');
define('SECURE_AUTH_SALT', 'PRdME$bV/jln8)3b+ZtPminYZDH#Z_]v4mLF3+ $LE(gJ(G(}Z%,Oh)D%s`Ju !&');
define('LOGGED_IN_SALT',   'V%-*Y-[A-`[Sh76LzXlqn=JDpuHeQ<b:ELw#V1FO8_A38b&i78/5E?,2E!$Y^7,u');
define('NONCE_SALT',       '^&Y-BvD%ifdfKfP&@,[ROW)X9W*7G*<:yk]nA&vr}N%3H)cVrj.2/zXIOp[0YG.Z');

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
