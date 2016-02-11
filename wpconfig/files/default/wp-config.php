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
define('AUTH_KEY',         'eULlULqupR2a$L|Q8Y$?$C*WF2y%{JtT8`J{$<?N#?+&*Bc+}1;~RoiiP2c^h~Y`');
define('SECURE_AUTH_KEY',  'W%nVs+czFA{D=Kt)E&7Vd`tQI:2]r{P],~=^wveqsrtloG;b:nB!#/n(J!h+k>rJ');
define('LOGGED_IN_KEY',    '{JVafzeG^Q~$r:U{hQs@`v.=|ldf<D9*.V%|;;Ov cYK+3)bW-UfEE8p/HR7byIP');
define('NONCE_KEY',        '[y?66258:O|W|~Arbf5Wer&81&5 DB1`E (+y0w5|bM]<+s|h:cy{g-VmvMj_2gr');
define('AUTH_SALT',        '?aET{_yN/|;P`MzIeWL)>:l))b~Jk8ab@cmYynot.btnj q#8[F1V,|]oLKgCrFj');
define('SECURE_AUTH_SALT', 'Ji+-*#.WXLbmybQq^f`hocC$bAk=-F1D/{9j5S;zrwe(~V}tFt:lY1OF/pE7+5n-');
define('LOGGED_IN_SALT',   'Fw:=&1BSmCynL,sn7&eu|kAX@E+cjf|]pY1X3,g.%k_{3bU1&&44+;*6z+<v2n~3');
define('NONCE_SALT',       '|u)>3cEd@/1]/[u/TQH.MhuGDEfL)V_yr$P+$KBdEoS/nQmPX{m^nuxEF/=t+@Ah');


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
