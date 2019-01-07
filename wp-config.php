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
define('DB_NAME', 'houndhudDBdd2yj');

/** MySQL database username */
define('DB_USER', 'houndhudDBdd2yj');

/** MySQL database password */


/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'eadK_~-Vls|}o!$f7^XT3*mmE9S9xspW;[oVC||sYF>Byvc;qQH;qmeL_p1~WDN1');
define('SECURE_AUTH_KEY',  '7iA{X2+p6<K1eO21oOpJGsdKJvgFjU^rUT{r^*L6*q2.6.hS5_SShS-@hR~ogwV:^');
define('LOGGED_IN_KEY',    'r}vBAQBnqTEqX*q6.qKxaL8O9poN0!ONcNzzcMzn{$b>{uf{qp*qAwaKxh|wG1-zG');
define('NONCE_KEY',        'U,JQ3rE{^<mqlaqaS;@:~!8z^zgb3^ubQ{qPS*pTD~pShCkZC:oY8Z3,nY,yjyjE');
define('AUTH_SALT',        'C[cNzoRQ$n$$I3$nH2H2#p9*~lK5tk-l:0vk0!^r7>$jU^r$M3$*L6HHteH2sdtd');
define('SECURE_AUTH_SALT', 'gRz}@c7{rc>i$n3;+mL.peDTS_tS54hShk}whKJzkzyc,zI{*M6aLxiLLtetwD:wh');
define('LOGGED_IN_SALT',   '<ybB+I2IH*iH*tete8[sZK|kVooNzkNMzjz$I3$n.u.ii;.mX1~1_dG1wlC}G1rcF');
define('NONCE_SALT',       '|9N[w:kgF^r,7fybIA.bf]pLGD_90soKF[kzUnJEF$ymMXTP{lh:t_|k1_lo4|43c');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
