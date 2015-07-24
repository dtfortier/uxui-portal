<?php
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
define('DB_NAME', 'uxui_portal');

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
define('AUTH_KEY',         'F^|X)cYf|<p-i84.Y9U%yKRB9+3-=/F/[$<YU/2-*J[7P]t{nr<eN/hFB+l<!vi{');
define('SECURE_AUTH_KEY',  'x901g( awA&:H/Dy8Bb.O3?Xe2y1F|:|?Xl+_yUHgvo[FEsJCmm1K|ZTv+|DL5tb');
define('LOGGED_IN_KEY',    'm(mas%VU.kG+bd$SG+/yq_XYjIL|Uv+iuiNa{u5<n_}/SCl4=mJ25j9|xz|r2O/{');
define('NONCE_KEY',        'g>di,$]N!3|)=Bjaw@>x1[891minL9T+nF+ayX3$_p&,|B1s+aFIV@Y-@*`/5+dY');
define('AUTH_SALT',        'Y|@sxz*6+n[dRki1zy`M-?6j*J|KO=5tiO@<d;QwTN;K3e,<Cmm`Db-+sP&eI/>a');
define('SECURE_AUTH_SALT', 'g*xU+H#-sW8EUdzcuf_|4Gd$9?6,xn&{?W0~{M~ Y$K%vb$Q95:T:pJErR;(K*zK');
define('LOGGED_IN_SALT',   'Wy~-ywlZD|g$$f<5%@Kl5/0fg%u|#+eGB2?6iU|&<Ldxf_#AG[KR($m++)oha>2`');
define('NONCE_SALT',       'ZlsX@S34_tjlT>ZV`s9SLs ^{fI+dX@Y{ztg-+myiRs1Dsug]|Bh[+6v~_Dn%iuI');

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
