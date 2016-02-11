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
define('WP_REDIS_HOST', 'wordpress.uc1k7r.0001.usw2.cache.amazonaws.com');
define('WP_HOME','http://d2sgx0tdqa0sak.cloudfront.net');
define('WP_SITEURL','http://d2sgx0tdqa0sak.cloudfront.net');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'wordpress');
/** MySQL hostname */
define('DB_HOST', 'wordpress.ciuzu1ipzm5e.us-west-2.rds.amazonaws.com');
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
define('AUTH_KEY',         'D-3>{p=Ap6uq-XooCZ MuDhtms:c/$LK4>(LR7mq)0c<iRPw$GxWRlmL?v^t]h y');
define('SECURE_AUTH_KEY',  '#c|*=-lC_@0N)5QdlFvjW*L>ugm^ (p(&,i>TFLJ:inuv`mh3.>jkkjHzU7~}&te');
define('LOGGED_IN_KEY',    'Ej2] !Y+itbbW{k/4|N+<WOd.B.Kf7N<+xW8t% sz]4Eg~r+%w_tNs:ZbsLNvs<^');
define('NONCE_KEY',        '59LIL`Moum}P~>.kxR$lT=KQr~3}3H|[wN/Ck^PPpWl&-6bQNab/!JQ`KU(^|,zt');
define('AUTH_SALT',        '6%]1~gwilP@DNtKH#8=wJ@@8`>!%dv-7<]}{MqlF]j-;9-9B[)w>jowMV5RdV|=~');
define('SECURE_AUTH_SALT', '.CwuY*@%Or$2U8aHSilr@(2vJNtL<-M[C|H|75]<yB0tvp7i[f (fn.M#x5|5/is');
define('LOGGED_IN_SALT',   '9z^_V==t 0JQ7Y%/U nx+r>2y$:+&&j:R+m=2q[Ooa^?G;~69v%|oDqqagJz&_W|');
define('NONCE_SALT',       '=| nnOe?aAGnbuAgVOKx3(prZOp{j<19:D-F4<lwcX1{1x{2i9!+q([H)6Kn q]C');


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
