<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'cookingandmore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xN6E7RU6IV');

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
define('AUTH_KEY',         'zEfBRd.Uyh*C>Gyra0I3(xo!)!ECM$>v+U(P[Pap[EW9/7_<[+hN>~Li?7&7!@gi');
define('SECURE_AUTH_KEY',  'psXf.|qVh3;l)_Wg1pyjT@hQ*lE/wXlF-)ZxBW8%T!Y>|}|]o$Xt=et)o{U^/]+J');
define('LOGGED_IN_KEY',    'SiIi0e0IghSqP1L::>c4.Rf46U)ryAqvH-E.YU|5bZw;X]1^idfCPg_V7-g(<>-r');
define('NONCE_KEY',        '9zei|;`Cxse6RTS`|n-_CCU?)e<yJO%_NF)_05 a>jpy|4t$rZTmAx-_Sz!FCyK-');
define('AUTH_SALT',        'j$UO$o[vE/wA[s|p$hUt||.u{+nXwYKC, jqE:-@+dAOGn5,cZXdTq1U#4}V%cnY');
define('SECURE_AUTH_SALT', '<[U9Uajxm0gRxLM]&gpKKd-O0Y[2xgYw#apP,?I+=%1;k0z`)KEJsx?3PT7?Resr');
define('LOGGED_IN_SALT',   'it@<3Y<yA|=669H^)r4~k.>TPYoRv;TiMQlDVw$p|2ElnQ7 TkVX`{&2=$:wol@4');
define('NONCE_SALT',       '9Hb}vrUD0:P0*TQ(FuO177Cf]KXt1d7N_r%DFk`3LMK2>d0k=MI]_ j=K :KL?Fl');

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
